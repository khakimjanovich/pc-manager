<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Contracts;

use Khakimjanovich\PCManager\Data\CardAddProcess\InitPayload;
use Khakimjanovich\PCManager\Data\CardAddProcess\InitResource;
use Khakimjanovich\PCManager\Data\CardAddProcess\VerifyPayload;
use Khakimjanovich\PCManager\Data\CardAddProcess\VerifyResource;

interface CardAddProcessContract
{
    public function init(InitPayload $data): InitResource;

    public function verify(VerifyPayload $data): VerifyResource;
}
