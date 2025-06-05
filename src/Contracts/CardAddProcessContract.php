<?php

namespace Khakimjanovich\PCManager\Contracts;

use Khakimjanovich\PCManager\Data\CardAddProcess\VerifyPayload;
use Khakimjanovich\PCManager\Data\CardAddProcess\VerifyResource;
use Khakimjanovich\PCManager\Data\CardAddProcess\InitResource;
use Khakimjanovich\PCManager\Data\CardAddProcess\InitPayload;

interface CardAddProcessContract
{
    public function init(InitPayload $data): InitResource;

    public function verify(VerifyPayload $data): VerifyResource;
}
