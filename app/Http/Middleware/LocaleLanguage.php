<?php

namespace App\Http\Middleware;

use App\Language;
use Closure;
use Illuminate\Support\Facades\App;

class LocaleLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $languages = Language::query()->get();

        view()->share(['languages' => $languages]);
        if (session()->has('locale')) {
            $locale = session()->get('locale');
            App::setLocale($locale);
        } else {
            App::setLocale('ar');
        }

        return $next($request);
    }
}
