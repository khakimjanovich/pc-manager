<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Exceptions;

use Exception;
use Khakimjanovich\PCManager\Enums\ExceptionCodes;
use Throwable;

final class PCManagerException extends Exception
{
    public ExceptionCodes $exceptionCode;

    public function __construct(ExceptionCodes $code, ?Throwable $previous = null)
    {
        $this->exceptionCode = $code;
        parent::__construct($code->value, 0, $previous);
    }

    public function getExceptionCode(): ExceptionCodes
    {
        return $this->exceptionCode;
    }
}
