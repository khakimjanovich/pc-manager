<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\P2P;

use Khakimjanovich\PCManager\Enums\P2PStatus;
use Spatie\LaravelData\Data;

final class PerformResource extends Data
{
    public function __construct(
        public string $id,
        public P2PStatus $status,
    ) {}
}
