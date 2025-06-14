<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Credit;

use Spatie\LaravelData\Data;

final class PerformPayload extends Data
{
    public function __construct(
        public SenderData  $sender,
        public string      $amount,
        public string      $receiver,
        public string      $receiver_type,
        public null|string $receiver_expiry_date = null,
    )
    {
    }
}
