<?php

namespace Rahmap\TestComposer\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateToken
{
	/**
	 * Handle an incoming request.
	 *
	 * @param Request $request
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next): mixed
	{
		$token = $request->header('X-SSO-ROUTE-TOKEN');

		if (empty($token) || empty(config('sso.portal_sso_token')) || $token !== config('sso.portal_sso_token')) {
			return response()->json([
				'status' => false,
				'message' => 'Unauthorized'
			], 401);
		}
		
		return $next($request);
	}
}