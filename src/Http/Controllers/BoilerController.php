<?php

namespace Dcat\Admin\Extension\Boiler\Http\Controllers;

use Dcat\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class BoilerController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('CCTV Boiler')
            ->description('View CCTV Boiler, Bagas House')
            ->body(view('boiler::index'));
    }
}
