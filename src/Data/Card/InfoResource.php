<?php

namespace Khakimjanovich\PCManager\Data\Card;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class InfoResource extends Data
{
    public function __construct(

        #[DataCollectionOf(InfoSuccessData::class)]
        public DataCollection $success,
        #[DataCollectionOf(InfoErrorData::class)]
        public DataCollection $error,
    )
    {
    }
}
