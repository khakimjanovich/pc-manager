<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\CardAddProcess;

use Spatie\LaravelData\Data;

final class VerifyPayload extends Data
{
    public function __construct(
        public string $id,
        public int $should_expire_in_minutes,
        public string $code,
    ) {}
}
