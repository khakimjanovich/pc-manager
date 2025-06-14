<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Credit;

use Spatie\LaravelData\Data;

final class SenderData extends Data
{
    public function __construct(
        public string $first_name,
        public string $surname,
        public string $middle_name,
        public string $birth_date,
        public string $doc_type,
        public string $doc_expiry_date,
        public string $doc_series_and_number,
        public string $person_code,
        public string $nationality,

        public string $card_id_or_pan,
        public string $debit_id,

        public string $system,
        public string $system_legal_name,
    ) {}
}
