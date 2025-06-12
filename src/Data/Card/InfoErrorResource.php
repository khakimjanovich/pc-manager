<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Card;

use Spatie\LaravelData\Data;

final class InfoErrorResource extends Data
{
    public function __construct(
        public string $id,
        public string $message,
    ) {}
}
