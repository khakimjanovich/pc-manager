<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Credit;

use Spatie\LaravelData\Data;

final class PerformResource extends Data
{
    public function __construct(
        public string $id
    ) {}
}
