<?php

namespace Khakimjanovich\PCManager\Data\Card;

use Carbon\Carbon;
use Spatie\LaravelData\Data;

class CardData extends Data
{
    public function __construct(
        public string $id,
        public string $pan,
        public string $expiry_date,
        public string $phone_number,
        public string $name_on_card,
        public string $name,
        public int    $order,
        public bool   $is_main,
        public string $processing_centre,
        public string $local_owner_id,
        public Carbon $created_at,
        public string $bank_name,
        public string $bank_image,
        public string $background_image,
    )
    {
    }
}
