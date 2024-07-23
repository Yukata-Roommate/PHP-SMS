<?php

namespace YukataRm\Sms\Twilio\Interface;

use YukataRm\Sms\Interface\ResponseInterface as BaseResponseInterface;

use Twilio\Rest\Api\V2010\Account\MessageInstance;

/**
 * Twilio Response Interface
 * 
 * @package YukataRm\Sms\Twilio\Interface
 */
interface ResponseInterface extends BaseResponseInterface
{
    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * get Twilio response
     *
     * @return \Twilio\Rest\Api\V2010\Account\MessageInstance
     */
    public function response(): MessageInstance;

    /**
     * get Twilio response as array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array;

    /**
     * get sender
     * 
     * @return string|null
     */
    public function sender(): ?string;

    /**
     * get recipient
     * 
     * @return string|null
     */
    public function recipient(): ?string;

    /**
     * get body
     * 
     * @return ?string
     */
    public function body(): ?string;

    /**
     * get status
     * 
     * @return string
     */
    public function status(): string;

    /**
     * get errorCode
     * 
     * @return int|null
     */
    public function errorCode(): ?int;

    /**
     * get errorMessage
     * 
     * @return ?string
     */
    public function errorMessage(): ?string;

    /**
     * get sid
     * 
     * @return string|null
     */
    public function sid(): ?string;

    /**
     * get accountSid
     * 
     * @return string|null
     */
    public function accountSid(): ?string;

    /**
     * get apiVersion
     * 
     * @return string|null
     */
    public function apiVersion(): ?string;

    /**
     * get dateCreated
     * 
     * @return \DateTime|null
     */
    public function dateCreated(): ?\DateTime;

    /**
     * get dateCreated as string
     * 
     * @param string $format
     * @return string|null
     */
    public function dateCreatedString(string $format = "Y-m-d H:i:s"): ?string;

    /**
     * get dateUpdated
     * 
     * @return \DateTime|null
     */
    public function dateUpdated(): ?\DateTime;

    /**
     * get dateUpdated as string
     * 
     * @param string $format
     * @return string|null
     */
    public function dateUpdatedString(string $format = "Y-m-d H:i:s"): ?string;

    /**
     * get dateSent
     * 
     * @return \DateTime|null
     */
    public function dateSent(): ?\DateTime;

    /**
     * get dateSent as string
     * 
     * @param string $format
     * @return string|null
     */
    public function dateSentString(string $format = "Y-m-d H:i:s"): ?string;

    /**
     * get price
     * 
     * @return string|null
     */
    public function price(): ?string;

    /**
     * get price as float
     * 
     * @return float|null
     */
    public function priceFloat(): ?float;

    /**
     * get priceUnit
     * 
     * @return string|null
     */
    public function priceUnit(): ?string;

    /**
     * get priceUnit as float
     * 
     * @return float|null
     */
    public function priceUnitFloat(): ?float;

    /**
     * get uri
     * 
     * @return string|null
     */
    public function uri(): ?string;

    /**
     * get numSegments
     * 
     * @return string|null
     */
    public function numSegments(): ?string;

    /**
     * get direction
     * 
     * @return string
     */
    public function direction(): string;

    /**
     * get messagingServiceSid
     * 
     * @return string|null
     */
    public function messagingServiceSid(): ?string;

    /**
     * get numMedia
     * 
     * @return string|null
     */
    public function numMedia(): ?string;

    /**
     * get subresourceUris
     * 
     * @return array<string, string>|null
     */
    public function subresourceUris(): ?array;
}
