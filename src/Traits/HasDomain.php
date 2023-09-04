<?php

namespace Dcat\Admin\Traits;

use Dcat\Admin\Admin;
use Dcat\Admin\Models\Domain;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasDomain
{
    public function scopeOwnDomainOnly(Builder $query): Builder {
        return $query->where('domain_id', Admin::domain()->id);
    }

    public function domain() : BelongsTo
    {
        return $this->belongsTo(Domain::class, 'domain_id');
    }

}
