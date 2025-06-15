<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\P2P;

use Khakimjanovich\PCManager\Models\Card;
use Spatie\LaravelData\Data;

final class PerformPayload extends Data
{
    public function __construct(
        public Card $card,
        public string $amount,
        public string $receiver,
        public ?string $fee_amount,
    ) {}
}
