<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'Asia/Kolkata',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
    ],

    
    'qs' => 
    [
        "0"  => '<div style="text-align:center;"><p style="text-align:center;"><img src="https://imgur.com/o4tjIgP.png" style="max-width:300px;max-height:300px;"></div>',

        "1"  => '<div style="text-align:center;"><p style="text-align:center;"><img src="https://imgur.com/b0WL7X3.png" style="max-width:300px;max-height:300px;"></div>',
        
        "2"  => '<div style="text-align:center;"><p style="text-align:center;">3-88-8-33-33 222-44-2-66-3</p></div>',

        "3"  => '<div style="text-align:center;"><p style="text-align:center;">The last time it came home, I almost didn’t</p></div>',

        "4"  => '<div style="text-align:center;"><p style="text-align:center;">171*,173*,178*,188,229*, ____*</p></div>',

        "5"  => '<div style="text-align:center;"><p style="text-align:center;">Hope this year doesn’t gut you like a fish</p></div>',

        "6"  => '<div style="text-align:center;"><p style="text-align:center;">Theme: Ashoka</p><img src="https://imgur.com/2VsuUEQ.png" style="max-width:300px;max-height:300px;"></div>',

        "7"  => '<div style="text-align:center;"><p style="text-align:center;">“-26.196711753929875, 28.03419079963608</p></div>',  

        "8"  => '<div style="text-align:center;"><p style="text-align:center;">Engineers of the Event</p></div>',

        "9"  => '<div style="text-align:center;"><p style="text-align:center;">.-- .- - -.-. .... ..--.. ...- -...- - -.. -..- --.. .-- .--- .... -. -.-- .. ---.. </p></div>',   

        "10" => '<div style="text-align:center;"><p style="text-align:center;"><img src="https://imgur.com/3E8SoSs.gif" style="max-width:300px;max-height:300px;"></div>',
    
        "11"  => '<div style="text-align:center;"><p style="text-align:center;">WZMTZO</p></div>',

        "12"  => '<div style="text-align:center;"><p style="text-align:center;"><img src="https://imgur.com/U74ke4E.png" style="max-width:300px;max-height:300px;">&nbsp;<img src="https://imgur.com/56Itjff.png" style="max-width:300px;max-height:300px;"></div>',

        "13"  => '<div style="text-align:center;"><p style="text-align:center;"><img src="https://imgur.com/UFEEFyb.png" style="max-width:300px;max-height:300px;"></div>',

        "14"  => '<div style="text-align:center;"><p style="text-align:center;">Scion accosts tantamount effect as dowager</p></div>',

        "15"  => '<div style="text-align:center;"><p style="text-align:center;">https://docs.google.com/document/d/1iH0I56DSilLzPX2SjoBRB_x5U3kjvEd_zBpkgBc164o/edit?usp=sharing</p></div>',

        
    ],


    'as' =>
    [
        "0"  => "eurus",
        "1"  => "degea",
        "2"  => "duteechand",
        "3"  => "julesrimettrophy",
        "4"  => "ameliakerr",
        "5"  => "therealdeal",
        "6"  => "newyorkyankees",
        "7"  => "invictus",
        "8"  => "rioolympics",
        "9"  => "bang",
        "10" => "lemans",
        "11"  => "geetaphogat",
        "12"  => "wasimakram",
        "13"  => "marykom",
        "14"  => "viswanathananand",
        "15"  => "hegerberg",
    ],

    'admin' =>
    [
        'onish.garg_ug21@ashoka.edu.in',
        'wics@ashoka.edu.in',
'khushi.mehta_ug22@ashoka.edu.in',
'prashasti.agarwal_ug22@ashoka.edu.in',
'rohan.manoj_ug22@ashoka.edu.in',
'arjun.khanna_ug23@ashoka.edu.in', 'dhrthi.bhat_ug23@ashoka.edu.in',
'sports.ministry@ashoka.edu.in'
    ]

];
