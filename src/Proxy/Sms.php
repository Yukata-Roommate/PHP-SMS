<?php

namespace YukataRm\Sms\Proxy;

use YukataRm\StaticProxy\StaticProxy;

use YukataRm\Sms\Proxy\Manager;

/**
 * Sms Proxy
 * 
 * @package YukataRm\Sms\Proxy
 * 
 * @method static \YukataRm\Sms\Twilio\Interface\ClientInterface twilio()
 * 
 * @see \YukataRm\Sms\Proxy\Manager
 */
class Sms extends StaticProxy
{
    /** 
     * get class name calling dynamic method
     * 
     * @return string 
     */
    protected static function getCallableClassName(): string
    {
        return Manager::class;
    }
}
