<?php

namespace Dcat\Admin\Http\Forms;

use Dcat\Admin\Admin;
use Dcat\Admin\Widgets\Form;
use Dcat\Admin\Enums\RouteAuth;

class AppSettingsForm extends Form
{
    public function handle(array $input)
    {
        admin_setting([Admin::app()->getName() => $input]);

        return $this
            ->response()
            ->location(admin_route(RouteAuth::APP_SETTINGS()))
            ->success(___('updated_success'));
    }

    private function getDefault(string $key): mixed
    {
        return config(Admin::app()->getName() . '.' . $key);
    }
    /**
     * Build a form here.
     */
    public function form()
    {
        $this->tab(__('admin.app_settings.basic'), function (Form $form) {
            $form->column(4, function (Form $form) {
                $form->text('name', __('admin.app_settings.name'))
                    ->default($this->getDefault('name'));

                $form->text('title', __('admin.app_settings.title'))
                    ->default($this->getDefault('title'));
            });
        }, false, 'basic');

        // $this->tab(__('admin.app_settings.login_n_registration'), function(Form $form) {
        //     $form->column(6, function(Form $form) {
        //         $form->switch('admin_allow-register', __('admin.app_settings.allow_register'))->default(config('admin.allow-register'))->width(2, 8);
        //         $form->switch('admin_registration-activation-enabled', __('admin.app_settings.registration_activation_enabled'))->default(config('admin.registration-activation-enabled'))->width(2, 8);
        //         $form->switch('admin_allow-reset-password', __('admin.app_settings.allow_reset_password'))->default(config('admin.allow-reset-password'))->width(2, 8);
        //     });

        //     $form->column(6, function(Form $form) {
        //         $form->switch('admin_recaptch-enabled', __('admin.app_settings.recaptch_enabled'))->width(8,4)->width(8,4)->default(config('admin.recaptch-enabled'));
        //         $form->text('admin_recaptch-site', __('admin.app_settings.recaptch_site'))->width(8,4)->default(config('admin.recaptch-site'));
        //         $form->text('admin_recaptch-secret', __('admin.app_settings.recaptch_secret'))->width(8,4)->default(config('admin.recaptch-secret'));
        //     });
        // }, false, 'login_n_registration');

        $this->tab(__('admin.app_settings.logos_n_favicons'), function (Form $form) {
            $form->column(4, function (Form $form) {
                $form->image('logo-image', __('admin.app_settings.logo'))
                    ->horizontal(false)
                    ->autoUpload()
                    ->uniqueName()
                    ->default($this->getDefault('logo-image'));

                $form->image('logo-mini', __('admin.app_settings.logo_mini'))
                    ->horizontal(false)
                    ->autoUpload()
                    ->uniqueName()
                    ->default($this->getDefault('logo-mini'));
            });

            $form->column(4, function (Form $form) {
                $form->image('login-background-image', __('admin.app_settings.login_background_image'))
                    ->horizontal(false)
                    ->autoUpload()
                    ->uniqueName()
                    ->default($this->getDefault('login-background-image'));

                $form->image('login-image', __('admin.app_settings.login_image'))
                    ->horizontal(false)
                    ->autoUpload()
                    ->uniqueName()
                    ->default($this->getDefault('login-image'));
            });
            $form->column(4, function (Form $form) {
                $form->image('favicon.icon-32', __('admin.app_settings.favicon_icon_32'))
                    ->horizontal(false)
                    ->autoUpload()
                    ->uniqueName()
                    ->default($this->getDefault('favicon.icon-32'));

                $form->image('favicon.icon-192', __('admin.app_settings.favicon_icon_192'))
                    ->horizontal(false)
                    ->autoUpload()
                    ->uniqueName()
                    ->default($this->getDefault('favicon.icon-192'));
            });
        }, false, 'logos-and-favicons');

        // $this->tab(__('admin.app_settings.custom_style'), function(Form $form) {
        //     $form->codemirror('admin_custom-style', __('admin.app_settings.custom_style'))
        //         ->help('Hit F5 button (Refresh page) if you see editor layout is broken')
        //         ->mode(CodemirrorMode::CSS)
        //         ->default($this->getDefault('custom_style'));

        // }, false, 'custom-style');

    }
}
