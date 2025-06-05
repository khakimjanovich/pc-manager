<?php

namespace Khakimjanovich\PCManager\Data\CardAddProcess;

use Spatie\LaravelData\Data;

class VerifyPayload extends Data
{
    public function __construct(
        public string $id,
        public int $should_expire_in_minutes,
        public int $code,
    ) {}
}
