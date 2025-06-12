<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Contracts;

use Khakimjanovich\PCManager\Data\Card\InfoErrorResource;
use Khakimjanovich\PCManager\Data\Card\InfoSuccessResource;
use Khakimjanovich\PCManager\Data\Card\ListResource;

interface CardContract
{
    /** @returns array<int, ListResource> */
    public function list(string $local_owner_id): array;

    /** @returns array<int, InfoSuccessResource|InfoErrorResource> */
    public function info(string $local_owner_id): array;
}
