<?php

namespace Blog\Frontend\Providers;

use Illuminate\Support\ServiceProvider;

class BlogFrontendServiceProvider extends ServiceProvider {

    public function boot() {
        $this->provides(self::class);
        $this->publishes([
            __DIR__ . '/../../config/email.php' => config_path('email.php'),
        ]);
    }

    public function register() {
        
    }

}
