<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Data\Credit;

use Spatie\LaravelData\Data;

final class PerformPayload extends Data
{
    public function __construct(
        public string $retrieval_ref_number,
        public string $nationality,
        public SenderData $doc_type,
        public string $serial_no,
        public string $id_card,
        public string $doc_valid_through,
        public string $person_code,
        public string $surname,
        public string $pan,
        public string $first_name,
        public string $middle_name,
        public string $birth_date,
    ) {}
}
