<?php

namespace Khakimjanovich\PCManager\Data\Card;

use Spatie\LaravelData\Data;

class InfoResource extends Data
{
    public function __construct(
        public string      $id,
        public string|null $balance,
        public string|null $state,
        public string|null $message,
    )
    {
    }
}
