<?php

namespace YukataRm\Laravel\Sms\Facade;

use YukataRm\Sms\Proxy\Manager as BaseSmsManager;

use YukataRm\Laravel\Sms\Twilio\Interface\ClientInterface as TwilioClientInterface;
use YukataRm\Laravel\Sms\Twilio\Client as TwilioClient;

/**
 * Facade Manager
 * 
 * @package YukataRm\Laravel\Sms\Facade
 */
class Manager extends BaseSmsManager
{
    /**
     * make Twilio Client instance
     *
     * @return \YukataRm\Laravel\Sms\Twilio\Interface\ClientInterface
     */
    public function twilio(): TwilioClientInterface
    {
        return new TwilioClient();
    }
}
