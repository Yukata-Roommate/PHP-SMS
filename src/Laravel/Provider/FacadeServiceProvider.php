<?php

namespace YukataRm\Laravel\Sms\Provider;

use Illuminate\Support\ServiceProvider;

use YukataRm\Laravel\Sms\Facade\Manager;
use YukataRm\Laravel\Sms\Facade\Sms;

/**
 * Facade Service Provider
 * 
 * @package YukataRm\Laravel\Sms\Provider
 */
class FacadeServiceProvider extends ServiceProvider
{
    /**
     * register Facade
     * 
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Sms::class, function () {
            return new Manager();
        });
    }
}
