<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Contracts;

use Khakimjanovich\PCManager\Data\Credit\PerformPayload;
use Khakimjanovich\PCManager\Data\Credit\PerformResource;

interface CreditContract
{
    public function perform(PerformPayload $data): PerformResource;
}
