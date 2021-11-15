<?php

namespace App\Providers;
use Illuminate\Support\Facades\Blade;
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
        if (env('APP_ENV') != 'local') {
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
            // return $money;
            return "<?php echo $money; ?>";
        });
    }
}
