<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager;

use Khakimjanovich\PCManager\Contracts\CardAddProcessContract;

final class PCManager
{
    public ?CardAddProcessContract $card_add_process = null;
}
