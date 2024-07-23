<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Aturan validasi untuk melarang inputan script
        Validator::extendImplicit('no_scripts', function ($attribute, $value, $parameters, $validator) {
            return !preg_match('/<\s*script|<\/?\s*(?:style|object|data|img|svg|div|body|input|select|textarea|keygen|video|details|audio|marquee|meter)\b|\b(?:on\w+)=|javascript:/i', $value);
        });

        // Pesan error jika inputan berupa script
        Validator::replacer('no_scripts', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'Lo keren banget, coba-coba XSS di website ini. Sayangnya enggak semudah itu, Bro.');
        });
    }
}