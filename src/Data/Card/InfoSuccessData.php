<?php

namespace Khakimjanovich\PCManager\Data\Card;

use Spatie\LaravelData\Data;

class InfoSuccessData extends Data
{
    public function __construct(
        public string $id,
        public string $balance,
        public string $state,
    ) {}
}
