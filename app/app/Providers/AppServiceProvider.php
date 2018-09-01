<?php

namespace inoledge\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;
use  inoledge\article;
use  inoledge\articlesCat;
use inoledge\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Storage;
use DataTables;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
		public function register()
		{
			$this->app->bind('path.public', function() {
				return realpath(base_path().'/../html');
			});
		}
}
