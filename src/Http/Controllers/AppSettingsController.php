<?php

namespace Dcat\Admin\Http\Controllers;

use Dcat\Admin\Widgets\Card;
use Dcat\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Forms\AppSettingsForm;

class AppSettingsController extends Controller
{
     public function index(Content $content): Content
     {
        return $content
            ->body(new Card(new AppSettingsForm()));
     }
}
