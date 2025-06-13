<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\CardAddProcess;

use Spatie\LaravelData\Data;

final class InitResource extends Data
{
    public function __construct(
        public string $id,
        public string $phone_number,
        public string|null $code
    ) {}
}
