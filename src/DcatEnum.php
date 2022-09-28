<?php

namespace Dcat\Admin;

interface DcatEnum extends \Illuminate\Contracts\Support\Arrayable, \Illuminate\Contracts\Support\Jsonable
{
    public function label(): string;
}