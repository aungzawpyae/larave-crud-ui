<?php

namespace App\Http\Controllers\Api;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
	public function __invoke($lang)
	{
		if(in_array($lang, ['en', 'mm'])) {
			$cookie = cookie(\App\Http\Middleware\SetApplicationLocale::LOCALE_COOKIE_NAME, $lang);
			return redirect()->route('home')->cookie($cookie);
		}
		return redirect()->route('home');
	}
}