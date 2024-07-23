<?php

namespace YukataRm\Sms\Twilio;

use YukataRm\Sms\BaseResponse;
use YukataRm\Sms\Twilio\Interface\ResponseInterface;

use Twilio\Rest\Api\V2010\Account\MessageInstance;

/**
 * Twilio Response
 * 
 * @package YukataRm\Sms\Twilio
 */
class Response extends BaseResponse implements ResponseInterface
{
    /*----------------------------------------*
     * Constructor
     *----------------------------------------*/

    /**
     * Twilio Response
     *
     * @var \Twilio\Rest\Api\V2010\Account\MessageInstance
     */
    protected MessageInstance $response;

    /**
     * constructor
     *
     * @param \Twilio\Rest\Api\V2010\Account\MessageInstance $response
     */
    public function __construct(MessageInstance $response)
    {
        $this->response = $response;
    }

    /*----------------------------------------*
     * Result
     *----------------------------------------*/

    /**
     * get is received success response
     *
     * @return bool
     */
    public function isSuccess(): bool
    {
        return is_null($this->errorCode()) && is_null($this->errorMessage());
    }

    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * get Twilio response
     *
     * @return \Twilio\Rest\Api\V2010\Account\MessageInstance
     */
    public function response(): MessageInstance
    {
        return $this->response;
    }

    /**
     * get Twilio response as array
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->response->toArray();
    }

    /**
     * get sender
     * 
     * @return string|null
     */
    public function sender(): ?string
    {
        return $this->response->from;
    }

    /**
     * get recipient
     * 
     * @return string|null
     */
    public function recipient(): ?string
    {
        return $this->response->to;
    }

    /**
     * get body
     * 
     * @return ?string
     */
    public function body(): ?string
    {
        return $this->response->body;
    }

    /**
     * get status
     * 
     * @return string
     */
    public function status(): string
    {
        return $this->response->status;
    }

    /**
     * get errorCode
     * 
     * @return int|null
     */
    public function errorCode(): ?int
    {
        return $this->response->errorCode;
    }

    /**
     * get errorMessage
     * 
     * @return ?string
     */
    public function errorMessage(): ?string
    {
        return $this->response->errorMessage;
    }

    /**
     * get sid
     * 
     * @return string|null
     */
    public function sid(): ?string
    {
        return $this->response->sid;
    }

    /**
     * get accountSid
     * 
     * @return string|null
     */
    public function accountSid(): ?string
    {
        return $this->response->accountSid;
    }

    /**
     * get apiVersion
     * 
     * @return string|null
     */
    public function apiVersion(): ?string
    {
        return $this->response->apiVersion;
    }

    /**
     * get dateCreated
     * 
     * @return \DateTime|null
     */
    public function dateCreated(): ?\DateTime
    {
        return $this->response->dateCreated;
    }

    /**
     * get dateCreated as string
     * 
     * @param string $format
     * @return string|null
     */
    public function dateCreatedString(string $format = "Y-m-d H:i:s"): ?string
    {
        $dateCreated = $this->dateCreated();

        return is_null($dateCreated) ? null : $dateCreated->format($format);
    }

    /**
     * get dateUpdated
     * 
     * @return \DateTime|null
     */
    public function dateUpdated(): ?\DateTime
    {
        return $this->response->dateUpdated;
    }

    /**
     * get dateUpdated as string
     * 
     * @param string $format
     * @return string|null
     */
    public function dateUpdatedString(string $format = "Y-m-d H:i:s"): ?string
    {
        $dateUpdated = $this->dateUpdated();

        return is_null($dateUpdated) ? null : $dateUpdated->format($format);
    }

    /**
     * get dateSent
     * 
     * @return \DateTime|null
     */
    public function dateSent(): ?\DateTime
    {
        return $this->response->dateSent;
    }

    /**
     * get dateSent as string
     * 
     * @param string $format
     * @return string|null
     */
    public function dateSentString(string $format = "Y-m-d H:i:s"): ?string
    {
        $dateSent = $this->dateSent();

        return is_null($dateSent) ? null : $dateSent->format($format);
    }

    /**
     * get price
     * 
     * @return string|null
     */
    public function price(): ?string
    {
        return $this->response->price;
    }

    /**
     * get price as float
     * 
     * @return float|null
     */
    public function priceFloat(): ?float
    {
        $price = $this->price();

        return is_null($price) ? null : (float) $price;
    }

    /**
     * get priceUnit
     * 
     * @return string|null
     */
    public function priceUnit(): ?string
    {
        return $this->response->priceUnit;
    }

    /**
     * get priceUnit as float
     * 
     * @return float|null
     */
    public function priceUnitFloat(): ?float
    {
        $priceUnit = $this->priceUnit();

        return is_null($priceUnit) ? null : (float) $priceUnit;
    }

    /**
     * get uri
     * 
     * @return string|null
     */
    public function uri(): ?string
    {
        return $this->response->uri;
    }

    /**
     * get numSegments
     * 
     * @return string|null
     */
    public function numSegments(): ?string
    {
        return $this->response->numSegments;
    }

    /**
     * get direction
     * 
     * @return string
     */
    public function direction(): string
    {
        return $this->response->direction;
    }

    /**
     * get messagingServiceSid
     * 
     * @return string|null
     */
    public function messagingServiceSid(): ?string
    {
        return $this->response->messagingServiceSid;
    }

    /**
     * get numMedia
     * 
     * @return string|null
     */
    public function numMedia(): ?string
    {
        return $this->response->numMedia;
    }

    /**
     * get subresourceUris
     * 
     * @return array<string, string>|null
     */
    public function subresourceUris(): ?array
    {
        return $this->response->subresourceUris;
    }
}
