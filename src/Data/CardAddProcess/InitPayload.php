<?php

namespace Khakimjanovich\PCManager\Data\CardAddProcess;

use Khakimjanovich\PCManager\Enums\CardAddSMSConfigLanguages;
use Khakimjanovich\PCManager\Rules\ValidExpiry;
use Khakimjanovich\PCManager\Rules\ValidPAN;
use Spatie\LaravelData\Attributes\Validation\Rule;
use Spatie\LaravelData\Data;

class InitPayload extends Data
{
    public function __construct(
        #[Rule(new ValidPAN)]
        public string $pan,
        public CardAddSMSConfigLanguages $language,
        public string $phone_number,
        #[Rule(new ValidExpiry)]
        public string $expiry_date,
        public string $name,
        public string $local_owner_id,
        public ?int $order = null,
        public bool $is_main = false,
    ) {}
}
