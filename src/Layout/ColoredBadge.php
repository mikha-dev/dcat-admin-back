<?php

namespace Dcat\Admin\Layout;

use D4T\Core\Enums\StyleClassType;

class ColoredBadge
{
    public function __construct(public float|int|string $value, public StyleClassType $class = StyleClassType::INFO)
    {
    }
}
