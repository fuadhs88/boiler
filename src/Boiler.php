<?php

namespace Dcat\Admin\Extension\Boiler;

use Dcat\Admin\Extension;

class Boiler extends Extension
{
    const NAME = 'boiler';

    protected $serviceProvider = BoilerServiceProvider::class;

    protected $composer = __DIR__.'/../composer.json';

    protected $assets = __DIR__.'/../resources/assets';

    protected $views = __DIR__.'/../resources/views';

//    protected $lang = __DIR__.'/../resources/lang';

    protected $menu = [
        'title' => 'Boiler',
        'path'  => 'boiler',
        'icon'  => 'fa-cogs',
    ];
}
