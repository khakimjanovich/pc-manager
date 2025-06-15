<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Debit;

use Khakimjanovich\PCManager\Models\Card;
use Spatie\LaravelData\Data;

final class InitPayload extends Data
{
    public function __construct(
        public Card $card,
        public string $amount,
    ) {}
}
