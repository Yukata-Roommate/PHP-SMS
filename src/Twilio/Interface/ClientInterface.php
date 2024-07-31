<?php

namespace YukataRm\Sms\Twilio\Interface;

use YukataRm\Sms\Interface\ClientInterface as BaseClientInterface;

use YukataRm\Sms\Twilio\Interface\ResponseInterface;

/**
 * Twilio Client Interface
 * 
 * @package YukataRm\Sms\Twilio\Interface
 */
interface ClientInterface extends BaseClientInterface
{
    /*----------------------------------------*
     * Sending
     *----------------------------------------*/

    /**
     * send SMS
     *
     * @return \YukataRm\Sms\Twilio\Interface\ResponseInterface
     */
    public function send(): ResponseInterface;

    /*----------------------------------------*
     * Auth
     *----------------------------------------*/

    /**
     * set account sid
     *
     * @return string|null
     */
    public function accountSid(): string|null;

    /**
     * set account sid
     *
     * @param string $accountSid
     * @return static
     */
    public function setAccountSid(string $accountSid): static;

    /**
     * get auth token
     *
     * @return string|null
     */
    public function authToken(): string|null;

    /**
     * set auth token
     *
     * @param string $authToken
     * @return static
     */
    public function setAuthToken(string $authToken): static;

    /*----------------------------------------*
     * Status Callback
     *----------------------------------------*/

    /**
     * get callback url
     *
     * @return string|null
     */
    public function statusCallback(): string|null;

    /**
     * set callback url
     *
     * @param string $statusCallback
     * @return static
     */
    public function setStatusCallback(string $statusCallback): static;
}
