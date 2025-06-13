<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Debit;

use Spatie\LaravelData\Data;

final class InitPayload extends Data
{
    public function __construct(
        public string $card_id,
        public string $amount,
    ) {}
}
