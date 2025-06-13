<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\P2P;

use Spatie\LaravelData\Data;

final class PerformPayload extends Data
{
    public function __construct(
        public string $card_id,
        public string $amount,
        public string $receiver,
        public ?string $fee_amount,
    ) {}
}
