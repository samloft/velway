<?php

namespace App\Providers;

use App\Models\CompanyInformation;
use App\Models\Social;
use Illuminate\Support\ServiceProvider;
use Schema;

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
        if (Schema::hasTable('company_details')) {
            view()->share('company_details', CompanyInformation::show());
        }

        if (Schema::hasTable('social')) {
            view()->share('social', Social::show()->getAttributes());
        }
    }
}
