<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Request as ModelsRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            if (Auth::id() != null) {
                $requestCount = ModelsRequest::where('user_id', '=', Auth::id())
                    ->whereDate('created_at', Carbon::today())->count();
                $requestLimit = User::where('id', '=', Auth::id())->select('limit')->first();
                $remainingRequest = ((int)$requestLimit->limit) - $requestCount;
            } else {
                $remainingRequest = 0;
            }
            $view->with('remainingRequest', $remainingRequest);
        });
    }
}
