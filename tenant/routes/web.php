<?php

use Tenant\Http\Controllers;

Route::get('/', Controllers\HomeController::class)->name('home');