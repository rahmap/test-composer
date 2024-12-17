<?php

namespace Rahmap\TestComposer\Services;

use Exception;
use Illuminate\Support\Facades\Artisan;

class SpatieService
{
	public static function resetCache()
	{
		try {
			Artisan::call('permission:cache-reset');
			
			return response()->json([
				'status' => true,
				'message' => 'Success reset cache Permission, Role and Menu'
			]);
		} catch (Exception $e) {
			return response()->json([
				'status' => false,
				'message' => 'Failed reset cache Permission, Role and Menu' . (app()->isProduction() ? '' : '. Error : ' . $e->getMessage())
			]);
		}
	}
}