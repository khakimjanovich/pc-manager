<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Enums;

enum DebitStatus: string
{
    case INIT_LOCAL = 'init_local';
    case INIT_PC = 'init_pc';
    case INIT_ERROR = 'init_error';
    case CONFIRM_LOCAL = 'confirm_local';
    case CONFIRM_PC = 'confirm_pc';
    case ERROR_PC = 'error_pc';
    case UNKNOWN = 'unknown';
    case DISMISS_PC = 'dismiss_pc';
    case EXPIRED_PC = 'expired_pc';
    case DISMISS_ERROR = 'dismiss_error';

    public static function mapFromSV(int $status): DebitStatus
    {
        return match ($status) {
            0 => self::INIT_PC,
            1 => self::CONFIRM_PC,
            2 => self::DISMISS_PC,
            3 => self::EXPIRED_PC,
        };
    }
}
