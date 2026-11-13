<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;


class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Check the 'lang' query parameter or use the session value
        $lang = $request->get('lang', Session::get('locale', 'fr'));

        // Validate the selected language (e.g., 'en', 'fr')
        if (in_array($lang, ['en', 'fr'])) {
            App::setLocale($lang);  // Set the locale for the current request
            Session::put('locale', $lang);  // Store the selected language in session
        }

        return $next($request);
    }
}
