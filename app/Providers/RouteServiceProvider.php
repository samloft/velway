<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapCmsRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::domain($this->baseDomain())
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "cms" routes for the application.
     *
     * CMS Admin panel.
     *
     * @return void
     */
    protected function mapCmsRoutes()
    {
        Route::domain($this->baseDomain('cms'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/cms.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::domain($this->baseDomain('api'))
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    private function baseDomain(string $sub_domain = ''): string
    {
        if (strlen($sub_domain) > 0) {
            $sub_domain = "{$sub_domain}.";
        }

        $url = env('APP_URL');
        $url = str_replace('http://', '', $url);
        $url = str_replace('https://', '', $url);

        return $sub_domain . $url;
    }
}
