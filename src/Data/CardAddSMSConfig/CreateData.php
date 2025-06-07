<?php

namespace Khakimjanovich\PCManager\Data\CardAddSMSConfig;

use Khakimjanovich\PCManager\Enums\CardAddSMSConfigLanguages;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

class CreateData extends Data
{
    public function __construct(
        #[WithCast(EnumCast::class, type: CardAddSMSConfigLanguages::class)]
        public CardAddSMSConfigLanguages $language,
        public string                    $service_name,
        public string                    $hash,
        public string|null               $ussd = null,
        public int|null                  $template_id = null,
    )
    {
    }
}
