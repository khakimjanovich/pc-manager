<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Observers;

use Illuminate\Support\Str;
use Khakimjanovich\PCManager\Models\CardAddProcess;

final class CardAddProcessObserver
{
    public function creating(CardAddProcess $model): void
    {
        $model->id = Str::uuid();
    }
}
