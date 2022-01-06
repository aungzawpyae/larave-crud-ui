<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facedes\Cookie;

class SetApplicationLocale
{
	const LOCALE_COOKIE_NAME = '__lang';

	public function handle(Request $request, Closure $next)
    {
        $lang = $request->cookie(static::LOCALE_COOKIE_NAME);

        if($lang && in_array($lang, ['en', 'mm']))
        {
        	app()->setLocale($lang);
        }

        return $next($request);
    }
}