<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Contracts;

use Khakimjanovich\PCManager\Data\Credit\PerformPayload;
use Khakimjanovich\PCManager\Data\Credit\PerformResource;

interface CreateContract
{
    public function perform(PerformPayload $data): PerformResource;
}
