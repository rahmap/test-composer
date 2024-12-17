<?php

namespace Rahmap\TestComposer;

use Illuminate\Support\ServiceProvider;
use Rahmap\TestComposer\Http\Middleware\ValidateToken;

class PackageServiceProvider extends ServiceProvider
{
	public function boot(): void
	{
		$router = $this->app['router'];
		$router->aliasMiddleware('sso.validate-token', ValidateToken::class);
		
		$this->loadRoutesFrom(__DIR__ . '/Routes/api.php');
	}
}
