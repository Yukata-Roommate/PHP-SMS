<?php

namespace YukataRm\Laravel\Sms\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Sms Facade
 * 
 * @package YukataRm\Laravel\Sms\Facade
 * 
 * @method static \YukataRm\Laravel\Sms\Twilio\Interface\ClientInterface twilio()
 * 
 * @see \YukataRm\Laravel\Sms\Facade\Manager
 */
class Sms extends Facade
{
    /** 
     * Facade Accessor
     * 
     * @return string 
     */
    protected static function getFacadeAccessor(): string
    {
        return static::class;
    }
}
