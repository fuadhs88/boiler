<?php

use Dcat\Admin\Extension\Boiler\Http\Controllers;

Route::get('boiler', Controllers\BoilerController::class.'@index');