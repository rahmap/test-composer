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
				'message' => 'Gagal melakukan Clear Cache pada Client. Silahkan dicoba kembali atau lakukan Reset Cache secara manual' . (app()->isProduction() ? '' : '. Error : ' . $e->getMessage())
			]);
		}
	}
}