<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      //check that app is local
    //   if (!$this->app->isLocal()) {
    //     //else register your services you require for production
    //     $this->app['request']->server->set('HTTPS', true);
    // }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        } 
        Blade::directive('formatMoney', function ($money, $fractional=false) {
            if ($fractional) {
                $money = sprintf('%.2f', $money);
            }
            while (true) {
                $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $money);
                if ($replaced != $money) {
                    $money = $replaced;
                } else {
                    break;
                }
            } 
            return "<?php echo $money; ?>";
        });
        Blade::directive('removeComma', function ($value) {  
            return "<?php echo str_replace(',','',$value); ?>";
        });
    }
}
