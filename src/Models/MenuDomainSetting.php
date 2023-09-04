<?php

namespace Dcat\Admin\Models;

use Dcat\Admin\Enums\IconType;
use Dcat\Admin\Models\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuDomainSetting extends Model
{
    protected $table = 'admin_menu_domain_settings';

    protected $casts = ['icon_type' => IconType::class];

    protected $appends = [ 'icon' ];
    protected $fillable = [ 'visible' ];

    protected function menu() : BelongsTo {
        return $this->belongsTo(Menu::class);
    }

    protected function domain() : BelongsTo {
        return $this->belongsTo(Domain::class);
    }

    public function getIconAttribute() {
        if(is_null($this->icon_type))
            return null;

        return $this->icon_type == IconType::SVG ? 'icon-svg '.$this->icon_svg : $this->icon_font;
    }
}
