<?php

namespace Khakimjanovich\PCManager\Data\CardAddProcess;

use Spatie\LaravelData\Data;

class VerifyResource extends Data
{
    public function __construct(
        public string $id,
        public string $pan,
        public string $expiry_date,
        public string $phone_number,
    ) {}
}
