<?php

namespace YukataRm\Laravel\Sms\Twilio;

use YukataRm\Sms\Twilio\Client as BaseClient;

use YukataRm\Laravel\Sms\Twilio\Interface\ClientInterface;

use YukataRm\Laravel\Sms\Twilio\Response;

/**
 * Laravel Twilio Client
 * 
 * @package YukataRm\Laravel\Sms\Twilio
 */
class Client extends BaseClient implements ClientInterface
{
    /**
     * send SMS
     *
     * @return \YukataRm\Laravel\Sms\Twilio\Response
     */
    public function send(): Response
    {
        $response = $this->getResponse();

        return new Response($response);
    }
}
