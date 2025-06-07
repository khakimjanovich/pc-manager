<?php

namespace Khakimjanovich\PCManager\Data\Card;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ListResource extends Data
{
    public function __construct(
        /** @var array<int, CardData> $card */
        #[DataCollectionOf(CardData::class)]
        public DataCollection $card,
    ) {}
}
