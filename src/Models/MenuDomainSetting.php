<?php

namespace Dcat\Admin\Models;

use D4T\Core\Traits\HasDomain;
use Dcat\Admin\Enums\IconType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuDomainSetting extends Model
{
    use HasDomain;

//    protected $table = 'admin_menu_domain_settings';
    protected $casts = ['icon_type' => IconType::class];

    protected $appends = [ 'icon' ];
    protected $fillable = [ 'visible' ];

    /**
     * {@inheritDoc}
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

        $this->setTable(config('admin.database.menu_domain_settings_table') ?: 'admin_menu_domain_settings');
    }

    public function menu() : BelongsTo {
        $menuModel = config('admin.database.menu_model', Menu::class);
        return $this->belongsTo($menuModel);
    }

    public function getIconAttribute() {
        if(is_null($this->icon_type))
            return null;

        return $this->icon_type == IconType::SVG ? 'icon-svg '.$this->icon_svg : $this->icon_font;
    }
}
