<?php

namespace Dcat\Admin\Http\Controllers;

use Dcat\Admin\Form;
use Dcat\Admin\Admin;
use Illuminate\Http\Request;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Enums\RouteAuth;
use Illuminate\Auth\GuardHelpers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Dcat\Admin\Traits\HasFormResponse;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Dcat\Admin\Http\Repositories\Administrator;

class AuthController extends Controller
{
    use HasFormResponse;

    /**
     * @var string
     */
    protected $view = 'admin::pages.login';

    /**
     * @var string
     */
    protected $redirectTo;

    /**
     * Show the login page.
     *
     * @return Content|\Illuminate\Http\RedirectResponse
     */
    public function getLogin(Content $content)
    {

        if ($this->guard()->check()) {
            return redirect($this->getRedirectPath());
        }

        return $content->full()->body(view($this->view));
    }

    /**
     * Handle a login request.
     *
     * @param  Request  $request
     * @return mixed
     */
    public function postLogin(Request $request)
    {
        $credentials = $request->only([$this->username(), 'password']);
        $remember = (bool) $request->input('remember', false);

        /** @var \Illuminate\Validation\Validator $validator */
        $validator = Validator::make($credentials, [
            $this->username()   => 'required',
            'password'          => 'required',
        ]);

        if ($validator->fails()) {
            return $this->validationErrorsResponse($validator);
        }

        if($credentials[$this->username()] != 'admin') {
            $credentials['domain_id'] = Admin::domain()->id;
        }

        if ($this->guard()->attempt($credentials, $remember)) {
            return $this->sendLoginResponse($request);
        }

        return $this->validationErrorsResponse([
            $this->username() => $this->getFailedLoginMessage(),
        ]);
    }

    /**
     * User logout.
     *
     * @return Redirect|string
     */
    public function getLogout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $path = admin_url('auth/login');
        if ($request->pjax()) {
            return "<script>location.href = '$path';</script>";
        }

        return redirect($path);
    }

    /**
     *
     * @param  Content  $content
     * @return Content
     */
    public function getSecurity(Content $content)
    {
        $form = $this->securityForm();
        $form->tools(
            function (Form\Tools $tools) {
                $tools->disableList();
            }
        );

        return $content
            ->title(trans('admin.user_security'))
            ->body($form->edit(Admin::user()->getKey()));
    }

    /**
     * Update user setting.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function putSecurity()
    {
        $form = $this->securityForm();

        if (! $this->validateCredentialsWhenUpdatingPassword()) {
            $form->responseValidationMessages('old_password', trans('admin.old_password_error'));
        }

        return $form->update(Admin::user()->getKey());
    }

    /**
     *
     * @param  Content  $content
     * @return Content
     */
    public function getProfile(Content $content)
    {
        $form = $this->profileForm();
        $form->tools(
            function (Form\Tools $tools) {
                $tools->disableList();
            }
        );

        return $content
            ->title(trans('admin.user_profile'))
            ->body($form->edit(Admin::user()->getKey()));
    }

    /**
     * Update user setting.
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function putProfile()
    {
        $form = $this->profileForm();

        return $form->update(Admin::user()->getKey());
    }

    protected function validateCredentialsWhenUpdatingPassword()
    {
        $user = Admin::user();

        $oldPassword = \request('old_password');
        $newPassword = \request('password');

        if (
            (! $newPassword)
            || ($newPassword === $user->getAuthPassword())
        ) {
            return true;
        }

        if (! $oldPassword) {
            return false;
        }

        return $this->guard()
            ->getProvider()
            ->validateCredentials($user, ['password' => $oldPassword]);
    }

    protected function securityForm()
    {
        return new Form(new Administrator(), function (Form $form) {
            $form->action(admin_route(RouteAuth::SECURITY()));

            $form->disableCreatingCheck();
            $form->disableEditingCheck();
            $form->disableViewCheck();

            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
                $tools->disableDelete();
            });

            $form->password('old_password', trans('admin.old_password'));

            $form->password('password', trans('admin.password'))
                ->minLength(5)
                ->maxLength(25)
                ->customFormat(function ($v) {
                    /** @var mixed $this */
                    if ($v == $this->password) {
                        return;
                    }

                    return $v;
                });
            $form->password('password_confirmation', trans('admin.password_confirmation'))->same('password');

            $form->ignore(['password_confirmation', 'old_password']);

            $form->saving(function (Form $form) {
                if ($form->password && $form->model()->password != $form->password) {
                    $form->password = bcrypt($form->password);
                }

                if (! $form->password) {
                    $form->deleteInput('password');
                }
            });

            $form->saved(function (Form $form) {
                return $form
                    ->response()
                    ->success(trans('admin.update_succeeded'))
                    ->redirect(admin_route(RouteAuth::SECURITY()));
            });
        });
    }

    /**
     * Model-form for user setting.
     *
     * @return Form
     */
    protected function profileForm()
    {
        return new Form(new Administrator(), function (Form $form) {
            $form->action(admin_route(RouteAuth::PROFILE()));

            $form->disableCreatingCheck();
            $form->disableEditingCheck();
            $form->disableViewCheck();

            $form->tools(function (Form\Tools $tools) {
                $tools->disableView();
                $tools->disableDelete();
            });

            $form->display('username', trans('admin.username'));
            $form->text('name', trans('admin.name'))->required();
            $form->email('email', trans('admin.email'))->required();
            //todo::fix form image
            //$form->image('avatar_url', trans('admin.avatar'))->autoUpload();

            $form->saved(function (Form $form) {
                return $form
                    ->response()
                    ->success(trans('admin.update_succeeded'))
                    ->redirect(admin_route(RouteAuth::PROFILE()));
            });
        });
    }

    /**
     * @return string|\Symfony\Component\Translation\TranslatorInterface
     */
    protected function getFailedLoginMessage()
    {
        return Lang::has('admin.auth_failed')
            ? trans('admin.auth_failed')
            : 'These credentials do not match our records.';
    }

    /**
     * Get the post login redirect path.
     *
     * @return string
     */
    protected function getRedirectPath()
    {
        return $this->redirectTo ?: admin_url('/');
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $path = $this->getRedirectPath();

        return $this->response()
            ->success(trans('admin.login_successful'))
            ->locationToIntended($path)
            ->locationIf(Admin::app()->getEnabledApps(), $path)
            ->send();
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    protected function username()
    {
        return 'username';
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard|GuardHelpers
     */
    protected function guard()
    {
        return Admin::guard();
    }

    public function impersonate(Request $request, $id)
    {
        if ($id == Admin::user()->id) {
            admin_toastr(__('admin.cant_impersonate_yourself'), 'error');

            return redirect('/');
        }

        app('impersonate')->login($id);

        return admin_redirect('/');
        //return response("<script>location.href = '/';</script>");
    }

    public function deimpersonate(Request $request)
    {
        if (app('impersonate')->isActive()) {
            app('impersonate')->logout();
        }

        if ($request->has('redirect_to')) {
            return admin_redirect($request['redirect_to']);
        }

        return admin_redirect('/');
    }

    public function setLocale($key)
    {
        $url = request('url');
        Session::put('locale', $key);
        admin_toastr(__('admin.language_changed'));


        return admin_redirect($url);
    }
}
