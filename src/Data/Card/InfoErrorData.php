<?php

namespace Khakimjanovich\PCManager\Data\Card;

use Spatie\LaravelData\Data;

class InfoErrorData extends Data{
    public function __construct(
        public string $id,
        public string $message,
    ){}

}
