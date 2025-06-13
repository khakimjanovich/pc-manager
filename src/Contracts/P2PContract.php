<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Contracts;

use Khakimjanovich\PCManager\Data\P2P\PerformPayload;
use Khakimjanovich\PCManager\Data\P2P\PerformResource;

interface P2PContract
{
    public function perform(PerformPayload $data): PerformResource;
}
