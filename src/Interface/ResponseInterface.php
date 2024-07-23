<?php

namespace YukataRm\Sms\Interface;

/**
 * Response Interface
 * 
 * @package YukataRm\Sms\Interface
 */
interface ResponseInterface
{
    /**
     * get is received success response
     *
     * @return bool
     */
    public function isSuccess(): bool;
}
