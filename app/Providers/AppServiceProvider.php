<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('*', function ($notices) {
            $notices->notice = \App\Models\Notice::orderBy('date', 'desc')->take(5)->get();
            // $notices->with('notice', \App\Models\Notice::all());
        });

        view()->composer('*', function ($events) {
            $events->with('event', \App\Models\Event::all());
        });

        view()->composer('*', function ($news) {
            $news->with('news', \App\Models\News::all());
        });

        view()->composer('*', function ($teachers) {
            $teachers->with('teachers', \App\Models\Teacher::all());
        });

        view()->composer('*', function ($quotations) {
            $quotations->with('quotation', \App\Models\Quotation::all());
        });

        Paginator::useBootstrap();
    }
}
