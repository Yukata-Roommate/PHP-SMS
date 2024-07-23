<?php

namespace YukataRm\Sms;

use YukataRm\Sms\Interface\ResponseInterface;

/**
 * Base Response
 * 
 * @package YukataRm\Sms
 */
abstract class BaseResponse implements ResponseInterface
{
    /**
     * get is received success response
     *
     * @return bool
     */
    abstract public function isSuccess(): bool;
}
