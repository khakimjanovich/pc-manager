<?php

namespace Khakimjanovich\PCManager\Data\CardAddProcess;

use Spatie\LaravelData\Data;

class InitResource extends Data
{
    public function __construct(
        public string $id,
        public string $phone_number,
        public ?string $code
    ) {}
}
