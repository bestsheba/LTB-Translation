<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get language from session, or use default
        $locale = session(config('languages.session_key'), config('app.locale'));

        // Validate that the locale is supported
        if (!in_array($locale, config('languages.supported'))) {
            $locale = config('app.locale');
        }

        // Set the application locale
        app()->setLocale($locale);

        return $next($request);
    }
}
