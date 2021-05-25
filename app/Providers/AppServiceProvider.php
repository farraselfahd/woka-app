<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Events\Dispatcher;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Voyager::addAction(\App\Actions\VerifikasiJasa::class);
        Voyager::addAction(\TCG\Voyager\Actions\VerifikasiJasa::class);
        // Voyager::addAction(\App\Actions\MyAction::class);
    }
}
