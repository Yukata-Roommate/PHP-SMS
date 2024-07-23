<?php

namespace YukataRm\Laravel\Sms\Provider;

use Illuminate\Support\ServiceProvider as Provider;

use YukataRm\Laravel\Sms\Facade\Manager;
use YukataRm\Laravel\Sms\Facade\Sms;

/**
 * ServiceProvider
 * 
 * @package YukataRm\Laravel\Sms\Provider
 */
class ServiceProvider extends Provider
{
    /**
     * Register Facade
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
