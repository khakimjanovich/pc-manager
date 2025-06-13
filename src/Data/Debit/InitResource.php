<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Debit;

use Khakimjanovich\PCManager\Enums\DebitStatus;
use Spatie\LaravelData\Data;

final class InitResource extends Data
{
    public function __construct(
        public string $id,
        public DebitStatus $status,
    ) {}
}
