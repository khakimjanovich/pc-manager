<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\CardAddSMSConfig;

use Khakimjanovich\PCManager\Enums\CardAddSMSConfigLanguages;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;
use Spatie\LaravelData\Data;

final class CreateData extends Data
{
    public function __construct(
        #[WithCast(EnumCast::class, type: CardAddSMSConfigLanguages::class)]
        public CardAddSMSConfigLanguages $language,
        public string $service_name,
        public string $hash,
        public ?string $ussd = null,
        public ?int $template_id = null,
    ) {}
}
