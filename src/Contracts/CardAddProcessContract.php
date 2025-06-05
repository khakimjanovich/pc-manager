<?php

namespace Khakimjanovich\PCManager\Contracts;

use Khakimjanovich\PCManager\Data\CardAddProcess\InitPayload;
use Khakimjanovich\PCManager\Data\CardAddProcess\InitResource;
use Khakimjanovich\PCManager\Data\CardAddProcess\VerifyPayload;
use Khakimjanovich\PCManager\Data\CardAddProcess\VerifyResource;
use Khakimjanovich\PCManager\Models\Card;

interface CardAddProcessContract
{
    public function init(InitPayload $data): InitResource;

    public function verify(VerifyPayload $data, Card $card): VerifyResource;
}
