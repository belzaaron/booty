<?php

namespace Belzaaron\Booty;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
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

        $components = new Collection(File::allFiles(__DIR__.'/View/Components'));

        $this->loadViewComponentsAs('booty', $components->pluck('pathname')->all());

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
