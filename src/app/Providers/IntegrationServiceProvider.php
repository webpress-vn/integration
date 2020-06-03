<?php

namespace VCComponent\Laravel\Integration\Providers;

use Illuminate\Support\ServiceProvider;

class IntegrationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        // $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
        // $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
        $this->publishes([
            __DIR__ . '/../../app/Entities'                               => base_path('/app/Entities'),
            __DIR__ . '/../../app/Http/Controllers/Web'                   => base_path('/app/Http/Controllers/Web'),
            __DIR__ . '/../../app/Listeners'                              => base_path('/app/Listeners'),
            __DIR__ . '/../../app/Traits'                                 => base_path('/app/Traits'),
            __DIR__ . '/../../database/factories'                         => base_path('database/factories'),
            __DIR__ . '/../../database/seeds'                             => base_path('database/database/seeds'),
            __DIR__ . '/../../app/Http/View'                              => base_path('/app/Http/View'),
            __DIR__ . '/../../app/Http/Requests/ContactCreateRequest.php' => base_path('/app/Http/Requests/ContactCreateRequest.php'),
            __DIR__ . '/../../routes/web.php'                             => base_path('/routes/web.php'),
        ], 'integration');
        $this->publishes([__DIR__ . '/../../app/Providers/VccServiceProvider.php' => base_path('/app/Providers')], 'integration-VccServiceProvider');
    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register()
    {
    }
}
