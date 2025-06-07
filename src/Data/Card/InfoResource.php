<?php

namespace Khakimjanovich\PCManager\Data\Card;

use Spatie\LaravelData\Data;

class InfoResource extends Data
{
    public function __construct(
        public InfoSuccessData|InfoErrorData $data
    ) {}
}
