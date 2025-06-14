<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Credit;

use Khakimjanovich\PCManager\Enums\CreditStatus;
use Spatie\LaravelData\Data;

final class CreateData extends Data
{
    public function __construct(
        public int $epos_id,
        public string $receiver,
        public ?string $receiver_expiry_date,
        public string $amount,
        public SenderData $sender,
        public CreditStatus $status,
    ) {}
}
