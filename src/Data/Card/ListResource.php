<?php

namespace Khakimjanovich\PCManager\Data\Card;

use Spatie\LaravelData\Data;

class ListResource extends Data
{
    public function __construct(
        public CardData $card,
    ) {}
}
