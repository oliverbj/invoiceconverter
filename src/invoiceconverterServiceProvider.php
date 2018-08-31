<?php

namespace oliverbj\invoiceconverter;

use Illuminate\Support\ServiceProvider;

class invoiceconverterServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'oliverbj');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'oliverbj');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {

            // Publishing the configuration file.
            $this->publishes([
                __DIR__.'/../config/invoiceconverter.php' => config_path('invoiceconverter.php'),
            ], 'invoiceconverter.config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/oliverbj'),
            ], 'invoiceconverter.views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/oliverbj'),
            ], 'invoiceconverter.views');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/oliverbj'),
            ], 'invoiceconverter.views');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/invoiceconverter.php', 'invoiceconverter');

        // Register the service the package provides.
        $this->app->singleton('invoiceconverter', function ($app) {
            return new invoiceconverter;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['invoiceconverter'];
    }
}