<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LocalizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if is set before in DB not yet

        // Get the preferred language from the user's browser settings
        $preferredLanguage = $request->getPreferredLanguage();

        // check the default browser lang equal arabic to set locale as arabic,
        // if not, set locale as english.
        $lang = 'ar' === $preferredLanguage ?
            'ar' :
            $request->getPreferredLanguage(config('app.locales'));

        // Set the application locale to the preferred language
        app()->setLocale($lang);

        return $next($request);
    }
}
