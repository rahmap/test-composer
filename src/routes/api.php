<?php

use Illuminate\Support\Facades\Route;

Route::middleware('api')->prefix('rahmap')->group(function () {
	Route::get('/example', function () {
		return response()->json(['message' => 'Hello from MyPackage!']);
	});
	
	Route::post('/submit', function () {
		return response()->json(['status' => 'Data submitted!']);
	});
});
