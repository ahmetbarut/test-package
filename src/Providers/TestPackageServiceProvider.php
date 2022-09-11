<?php

namespace Ahmetbarut\TestPackage\Providers;

use Illuminate\Support\ServiceProvider;

class TestPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'test-package');
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        // commit atalım
        $this->publishes([
            __DIR__ . '/../../resources/views/' => resource_path('views/vendor/test-package'),
        ], 'test-package-views');
        
        // $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'test-package');

        $this->publishes([
            __DIR__ . '/../../config.php' => config_path('test-package.php'),
        ], 'test-package-config');
    }

    public function register()
    {
        $this->app->register(TestPackageEventServiceProvider::class);
        $this->mergeConfigFrom(__DIR__ . '/../../config.php', 'test-package');
    }
}
