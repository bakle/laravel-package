<?php

namespace Vendor\Package;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadConfig();

        $this->loadMigrations();

        $this->loadRoutes();

        $this->loadFactories();

        $this->loadTranslations();

        $this->loadViews();
    }

    /**
     * It loads the config files from the package's
     * config path.
     */
    private function loadConfig(): void
    {
        $configPath = __DIR__.'/../config/package.php';

        $this->publishes([
            $configPath => config_path('package.php'),
        ]);
    }

    /**
     * It loads the migrations from the package's
     * migration path.
     */
    private function loadMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * It loads the routes from the package's
     * route path.
     */
    private function loadRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
    }

    /**
     * It loads the factories from the package's
     * factories path.
     */
    private function loadFactories(): void
    {
        $this->loadFactoriesFrom(__DIR__.'/../factories');
    }

    /**
     * It loads the translations from the package's
     * translations path.
     */
    private function loadTranslations(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../translations', 'package');

        $this->publishes([
            __DIR__.'/../translations' => resource_path('lang/vendor/package'),
        ]);
    }

    /**
     * It loads the views from the package's
     * views path.
     */
    private function loadViews(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'package');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/package'),
        ]);
    }

    /**
     * It loads the translations from the package's
     * translations path.
     */
    private function loadCommands(): void
    {
        $this->commands([
            //FooCommand::class,
        ]);

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/package'),
        ]);
    }
}
