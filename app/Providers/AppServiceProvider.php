<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() : void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() : void
    {
        Blade::directive(
            'paragraph',
            static function ($expression) {
                return '<?php foreach(explode("\n", ' . $expression . ') as $paragraph): ?>'
                    . '<p><?= htmlentities($paragraph, ENT_QUOTES) ?></p>'
                    . '<?php endforeach; ?></p>';
            }
        );
    }
}
