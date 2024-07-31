<?php

namespace YukataRm\Sms\Twilio;

use YukataRm\Sms\BaseClient;
use YukataRm\Sms\Twilio\Interface\ClientInterface;

use YukataRm\Sms\Twilio\Response;

use Twilio\Rest\Client as TwilioClient;
use Twilio\Rest\Api\V2010\Account\MessageInstance;

/**
 * Twilio Client
 * 
 * @package YukataRm\Sms\Twilio
 */
class Client extends BaseClient implements ClientInterface
{
    /*----------------------------------------*
     * Sending
     *----------------------------------------*/

    /**
     * send SMS
     *
     * @return \YukataRm\Sms\Twilio\Response
     */
    public function send(): Response
    {
        $response = $this->getResponse();

        return new Response($response);
    }

    /**
     * get Twilio response
     * 
     * @return \Twilio\Rest\Api\V2010\Account\MessageInstance
     */
    public function getResponse(): MessageInstance
    {
        $recipient = $this->recipient();

        if (is_null($recipient)) throw new \RuntimeException("SMS recipient is not set.");

        $client  = $this->getClient();
        $options = $this->getOptions();

        $response = $client->messages->create($recipient, $options);

        return $response;
    }

    /**
     * get Twilio client
     *
     * @return \Twilio\Rest\Client
     */
    protected function getClient(): TwilioClient
    {
        $accountSid = $this->accountSid();
        $authToken  = $this->authToken();

        if (is_null($accountSid)) throw new \RuntimeException("Twilio account SID is not set.");

        if (is_null($authToken)) throw new \RuntimeException("Twilio auth token is not set.");

        return new TwilioClient($accountSid, $authToken);
    }

    /**
     * get Twilio options
     * 
     * @return array
     */
    protected function getOptions(): array
    {
        $options = [];

        $sender         = $this->sender();
        $body           = $this->body();
        $statusCallback = $this->statusCallback();

        if (is_null($sender)) throw new \RuntimeException("SMS sender is not set.");

        if (is_null($body)) throw new \RuntimeException("SMS body is not set.");

        $options["from"] = $sender;
        $options["body"] = $body;

        if (!is_null($statusCallback)) $options["statusCallback"] = $statusCallback;

        return $options;
    }

    /*----------------------------------------*
     * Auth
     *----------------------------------------*/

    /**
     * account sid
     *
     * @var string|null
     */
    protected string|null $accountSid = null;

    /**
     * auth token
     *
     * @var string|null
     */
    protected string|null $authToken = null;

    /**
     * get account sid
     *
     * @return string|null
     */
    public function accountSid(): string|null
    {
        return $this->accountSid;
    }

    /**
     * set account sid
     *
     * @param string $accountSid
     * @return static
     */
    public function setAccountSid(string $accountSid): static
    {
        $this->accountSid = $accountSid;

        return $this;
    }

    /**
     * get auth token
     *
     * @return string|null
     */
    public function authToken(): string|null
    {
        return $this->authToken;
    }

    /**
     * set auth token
     *
     * @param string $authToken
     * @return static
     */
    public function setAuthToken(string $authToken): static
    {
        $this->authToken = $authToken;

        return $this;
    }

    /*----------------------------------------*
     * Status Callback
     *----------------------------------------*/

    /**
     * callback url
     *
     * @var string|null
     */
    protected string|null $statusCallback = null;

    /**
     * get callback url
     *
     * @return string|null
     */
    public function statusCallback(): string|null
    {
        return $this->statusCallback;
    }

    /**
     * set callback url
     *
     * @param string $statusCallback
     * @return static
     */
    public function setStatusCallback(string $statusCallback): static
    {
        $this->statusCallback = $statusCallback;

        return $this;
    }
}
