<?php

namespace Dcat\Admin\Models;

use D4T\Core\Traits\HasDomain;
//use Illuminate\Auth\Authenticatable;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Illuminate\Contracts\Auth\Access\Authorizable;
//use Illuminate\Database\Eloquent\Model;
use D4T\Core\Traits\HasProfile;
use Illuminate\Support\Facades\URL;
use Dcat\Admin\Traits\HasPermissions;
use D4T\Core\Repositories\UserSettings;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;
use D4T\Core\Traits\HasDateTimeFormatter;
use D4T\Core\Contracts\NotifiableInterface;
use D4T\Core\Traits\HasDashboardNotifications;
use D4T\Core\Traits\HasNotificationSubscriptions;
use D4T\Core\Contracts\EmailContextObjectInterface;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Rappasoft\LaravelAuthenticationLog\Traits\AuthenticationLoggable;

/**
 * Class Administrator.
 *
 * @property Role[] $roles
 */
class Administrator extends Authenticatable implements NotifiableInterface, EmailContextObjectInterface
{
    //    Authenticatable,
    use HasPermissions;
    use HasDateTimeFormatter;
    use Notifiable;
    use HasDomain;
    use HasProfile;
    use HasNotificationSubscriptions;
    use HasDashboardNotifications;
    use AuthenticationLoggable;

    protected $casts = [
        'settings' => UserSettings::class . ':default'
    ];

    const DEFAULT_ID = 1;

    protected $fillable = ['username', 'password', 'name', 'avatar_url'];
    protected $appends = ['avatar'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getContextId(): string
    {
        return $this->id;
    }

    /**
     * Create a new Eloquent model instance.
     *
     * @param  array  $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->init();

        parent::__construct($attributes);
    }

    protected function init()
    {
        $connection = config('admin.database.connection') ?: config('database.default');

        $this->setConnection($connection);

        $this->setTable(config('admin.database.users_table'));
    }

    /**
     * Get avatar attribute.
     *
     * @return mixed|string
     */
    public function getAvatarAttribute(): string
    {
        return $this->getAvatar();
    }

    public function getAvatar(): string
    {

        $avatar = $this->avatar_url;

        if ($avatar) {
            if (!URL::isValidUrl($avatar)) {
                $avatar = Storage::disk(config('admin.upload.disk'))->url($avatar); //todo:: check and fix
            }

            return $avatar;
        }

        return admin_asset(config('admin.default_avatar') ?: '@admin/images/default-avatar.jpg');
    }

    /**
     * A user has and belongs to many roles.
     *
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        $pivotTable = config('admin.database.role_users_table');

        $relatedModel = config('admin.database.roles_model');

        return $this->belongsToMany($relatedModel, $pivotTable, 'user_id', 'role_id')->withTimestamps();
    }

    public function canSeeMenu($menu): bool
    {
        return true;
    }

    public function routeNotificationForDomainMailer($notifiable): string
    {
        return $this->email;
    }

}
