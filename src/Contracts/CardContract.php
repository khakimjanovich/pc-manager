<?php

namespace Khakimjanovich\PCManager\Contracts;

use Khakimjanovich\PCManager\Data\Card\InfoResource;
use Khakimjanovich\PCManager\Data\Card\ListResource;

interface CardContract
{
    public function list(string $local_owner_id): ListResource;

    public function info(string $local_owner_id): InfoResource;
}
