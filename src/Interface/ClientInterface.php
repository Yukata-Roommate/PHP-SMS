<?php

namespace YukataRm\Sms\Interface;

use YukataRm\Sms\Interface\ResponseInterface;

/**
 * Client Interface
 * 
 * @package YukataRm\Sms\Interface
 */
interface ClientInterface
{
    /*----------------------------------------*
     * Sending
     *----------------------------------------*/

    /**
     * send SMS
     *
     * @return \YukataRm\Sms\Interface\ResponseInterface
     */
    public function send(): ResponseInterface;

    /*----------------------------------------*
     * Address
     *----------------------------------------*/

    /**
     * get recipient
     *
     * @return string
     */
    public function recipient(): ?string;

    /**
     * set recipient
     *
     * @param string $recipient
     * @return static
     */
    public function setRecipient(string $recipient): static;

    /**
     * get sender
     *
     * @return ?string
     */
    public function sender(): ?string;

    /**
     * set sender
     *
     * @param string $sender
     * @return static
     */
    public function setSender(string $sender): static;

    /*----------------------------------------*
     * Body
     *----------------------------------------*/

    /**
     * get body
     *
     * @return string
     */
    public function body(): string;

    /**
     * set body array
     *
     * @param array<string> $body
     * @return static
     */
    public function setBodyArray(array $body): static;

    /**
     * set body
     *
     * @param string $body
     * @return static
     */
    public function setBody(string $body): static;

    /**
     * add body
     *
     * @param string $body
     * @return static
     */
    public function addBody(string $body): static;

    /**
     * clear body
     *
     * @return static
     */
    public function clearBody(): static;
}
