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
     * get accountSid
     *
     * @return ?string
     */
    public function accountSid(): ?string;

    /**
     * set accountSid
     *
     * @param string $accountSid
     * @return static
     */
    public function setAccountSid(string $accountSid): static;

    /**
     * get authToken
     *
     * @return ?string
     */
    public function authToken(): ?string;

    /**
     * set authToken
     *
     * @param string $authToken
     * @return static
     */
    public function setAuthToken(string $authToken): static;

    /*----------------------------------------*
     * StatusCallback
     *----------------------------------------*/

    /**
     * get callback URL
     *
     * @return ?string
     */
    public function statusCallback(): ?string;

    /**
     * set callback URL
     *
     * @param string $statusCallback
     * @return static
     */
    public function setStatusCallback(string $statusCallback): static;
}
