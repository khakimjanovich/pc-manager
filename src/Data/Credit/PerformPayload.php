<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Credit;

use Spatie\LaravelData\Data;

final class PerformPayload extends Data
{
    public function __construct(
        public SenderData $sender,
        public string $amount,
        public string $recipient,
        public string $recipient_type,
        public ?string $phone_number
    ) {}
}
