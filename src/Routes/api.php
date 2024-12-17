<?php

use Illuminate\Support\Facades\Route;
use Rahmap\TestComposer\Services\SpatieService;

Route::middleware('api')->prefix('api/package-name')->as('api.package-name.')->group(function () {
	Route::post('/reset-cache', fn() => SpatieService::resetCache())->name('reset-cache');
});