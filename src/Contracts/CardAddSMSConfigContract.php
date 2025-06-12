<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Contracts;

use Illuminate\Database\Eloquent\Collection;
use Khakimjanovich\PCManager\Data\CardAddSMSConfig\CreateData;
use Khakimjanovich\PCManager\Enums\CardAddSMSConfigLanguages;
use Khakimjanovich\PCManager\Models\CardAddSMSConfig;

interface CardAddSMSConfigContract
{
    public function list(): Collection;

    public function add(CreateData $data): CardAddSMSConfig;

    public function findByLanguage(CardAddSMSConfigLanguages $language): CardAddSMSConfig;

    public function update(int $config_id, CreateData $data): CardAddSMSConfig;
}
