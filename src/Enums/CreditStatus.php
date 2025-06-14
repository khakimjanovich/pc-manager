<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Enums;

enum CreditStatus: string
{
    case INIT_LOCAL = 'init_local';
    case INIT_PC = 'init_pc';
    case INIT_ERROR = 'init_error';
    case PERFORM_LOCAL = 'perform_local';
    case PERFORM_PC = 'perform_pc';
    case PERFORM_ERROR = 'perform_error';
    case UNKNOWN = 'unknown';
}
