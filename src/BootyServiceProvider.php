<?php

namespace Belzaaron\Booty;

use Belzaaron\Booty\View\Components;
use Illuminate\Support\ServiceProvider;

class BootyServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'booty');

        $this->loadViewComponentsAs('booty', [
            Components\Group::class,
            Components\Label::class,
            Components\Input::class,
            Components\Error::class,
            Components\Set::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/belzaaron/booty'),
        ], 'booty-views');

        $this->publishes([
            __DIR__.'/../src/View/Components/' => app_path('View/Components'),
        ], 'booty-components');
    }
}
