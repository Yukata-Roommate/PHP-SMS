<?php

namespace YukataRm\Sms\Proxy;

use YukataRm\Sms\Twilio\Interface\ClientInterface as TwilioClientInterface;
use YukataRm\Sms\Twilio\Client as TwilioClient;

/**
 * Proxy Manager
 * 
 * @package YukataRm\Sms\Proxy
 */
class Manager
{
    /**
     * make Twilio Client instance
     *
     * @return \YukataRm\Sms\Twilio\Interface\ClientInterface
     */
    public function twilio(): TwilioClientInterface
    {
        return new TwilioClient();
    }
}
