<?php

namespace YukataRm\Sms;

use YukataRm\Sms\Interface\ClientInterface;

use YukataRm\Sms\Interface\ResponseInterface;

/**
 * Base Client
 * 
 * @package YukataRm\Sms
 */
abstract class BaseClient implements ClientInterface
{
    /*----------------------------------------*
     * Sending
     *----------------------------------------*/

    /**
     * send SMS
     *
     * @return \YukataRm\Sms\Interface\ResponseInterface
     */
    abstract public function send(): ResponseInterface;

    /*----------------------------------------*
     * Address
     *----------------------------------------*/

    /**
     * recipient
     *
     * @var ?string
     */
    protected ?string $recipient = null;

    /**
     * sender
     *
     * @var ?string
     */
    protected ?string $sender = null;

    /**
     * get recipient
     *
     * @return string
     */
    public function recipient(): ?string
    {
        return $this->recipient;
    }

    /**
     * set recipient
     *
     * @param string $recipient
     * @return static
     */
    public function setRecipient(string $recipient): static
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * get sender
     *
     * @return ?string
     */
    public function sender(): ?string
    {
        return $this->sender;
    }

    /**
     * set sender
     *
     * @param string $sender
     * @return static
     */
    public function setSender(string $sender): static
    {
        $this->sender = $sender;

        return $this;
    }

    /*----------------------------------------*
     * Body
     *----------------------------------------*/

    /**
     * body
     *
     * @var array<string>
     */
    protected array $body = [];

    /**
     * get body
     *
     * @return string
     */
    public function body(): string
    {
        return implode(PHP_EOL, $this->body);
    }

    /**
     * set body array
     *
     * @param array<string> $body
     * @return static
     */
    public function setBodyArray(array $body): static
    {
        $this->body = $body;

        return $this;
    }

    /**
     * set body string
     *
     * @param string $body
     * @return static
     */
    public function setBody(string $body): static
    {
        return $this->setBodyArray([$body]);
    }

    /**
     * add body
     *
     * @param string $body
     * @return static
     */
    public function addBody(string $body): static
    {
        if (empty($this->body)) return $this->setBody($body);

        $this->body[] = $body;

        return $this;
    }

    /**
     * clear body
     *
     * @return static
     */
    public function clearBody(): static
    {
        $this->body = [];

        return $this;
    }
}
