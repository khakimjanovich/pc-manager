<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Contracts;

use Khakimjanovich\PCManager\Data\Debit\ConfirmPayload;
use Khakimjanovich\PCManager\Data\Debit\ConfirmResource;
use Khakimjanovich\PCManager\Data\Debit\InitPayload;
use Khakimjanovich\PCManager\Data\Debit\InitResource;

interface DebitContract
{
    public function init(InitPayload $data): InitResource;

    public function confirm(ConfirmPayload $data): ConfirmResource;
}
