<?php

namespace Blog\Frontend\Providers;

use Illuminate\Support\ServiceProvider;

class BlogFrontendServiceProvider extends ServiceProvider {

    public function boot() {
        
    }

    public function register() {
        $this->app->make('Blog\Frontend\Frontend');
    }

}
