<?php

namespace Vendor\Package;

use Illuminate\Support\ServiceProvider;
use Vendor\Package\Console\Commands\FooCommand;

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

        $this->loadCommands();
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
        $this->loadFactoriesFrom(__DIR__.'/../database/factories');
    }

    /**
     * It loads the lang from the package's
     * lang path.
     */
    private function loadTranslations(): void
    {
        $langPath = __DIR__.'/../resources/lang';

        $this->loadTranslationsFrom($langPath, 'package');

        $this->publishes([
            $langPath => resource_path('lang/vendor/package'),
        ]);
    }

    /**
     * It loads the views from the package's
     * views path.
     */
    private function loadViews(): void
    {
        $viewsPath = __DIR__.'/../resources/views';

        $this->loadViewsFrom($viewsPath, 'package');

        $this->publishes([
            $viewsPath => resource_path('views/vendor/package'),
        ]);
    }

    /**
     * It loads the commands from the package's
     * commands path.
     */
    private function loadCommands(): void
    {
        $this->commands([
            FooCommand::class,
        ]);
    }
}
