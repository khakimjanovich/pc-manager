<?php

namespace Khakimjanovich\PCManager\Data\CardAddProcess;

use Spatie\LaravelData\Data;

class CreateData extends Data
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
        public bool $confirmer
    ) {}
}
