<?php

namespace Khakimjanovich\PCManager\Observers;

use Illuminate\Support\Str;
use Khakimjanovich\PCManager\Models\CardAddProcess;

class CardAddProcessObserver
{
    public function creating(CardAddProcess $model): void
    {
        $model->id = Str::uuid();
    }
}
