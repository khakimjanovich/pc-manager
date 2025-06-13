<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Debit;

use Spatie\LaravelData\Data;

final class ConfirmPayload extends Data
{
    public function __construct(
        public string $id,
    ) {}
}
