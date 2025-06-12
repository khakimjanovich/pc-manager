<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\CardAddProcess;

use Spatie\LaravelData\Data;

final class CreateData extends Data
{
    public function __construct(
        public string $pan,
        public string $expiry_date,
        public string $phone_number,
        public string $bin,
        public string $name,
        public bool $is_main,
        public string $local_owner_id,
        public int $order,
        public string $confirmer
    ) {}
}
