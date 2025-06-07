<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Card;

use Khakimjanovich\PCManager\Rules\ValidExpiry;
use Khakimjanovich\PCManager\Rules\ValidPAN;
use Spatie\LaravelData\Attributes\Validation\Rule;
use Spatie\LaravelData\Data;

class CreateData extends Data
{
    public function __construct(
        #[Rule(new ValidPAN)]
        public string $pan,
        #[Rule(new ValidExpiry)]
        public string $expiry_date,
        public string $phone_number,
        public string $bin,
        public string $token,
        public string $name_on_card,
        public string $name,
        public ?int $order = null,
        public bool $is_main = false,
        public ?string $local_owner_id = null,
        public ?string $background_image = null,
    ) {}
}
