<?php

namespace Khakimjanovich\PCManager\Data\Card;

use Spatie\LaravelData\Data;

class InfoErrorResource extends Data
{
    public function __construct(
        public string $id,
        public string $message,
    ) {}
}
