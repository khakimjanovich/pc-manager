<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Enums;

enum P2PStatus: string
{
    case INIT_LOCAL = 'init_local';
    case INIT_PC = 'init_pc';
    case INIT_ERROR = 'init_error';
    case CONFIRM_LOCAL = 'confirm_local';
    case CONFIRM_PC = 'confirm_pc';
    case CONFIRM_ERROR = 'confirm_error';
    case UNKNOWN = 'unknown';
}
