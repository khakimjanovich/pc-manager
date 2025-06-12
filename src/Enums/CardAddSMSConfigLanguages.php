<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Enums;

enum CardAddSMSConfigLanguages: string
{
    case ENG = 'eng';
    case RUS = 'rus';
    case UZB = 'uzb';
    case TUR = 'tur';

    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
