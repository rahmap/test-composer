<?php

namespace Rahmap\TestComposer;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
	public function boot(): void
	{
		$this->loadRoutesFrom(__DIR__ . '/routes/api.php');
	}
	
	public function register()
	{
		// Package-specific bindings or configurations (if needed)
	}
}
