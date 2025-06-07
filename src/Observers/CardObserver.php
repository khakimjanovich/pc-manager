<?php

namespace Khakimjanovich\PCManager\Observers;

use Khakimjanovich\PCManager\Models\Card;

class CardObserver
{
    public function creating(Card $card): void
    {
        $card->processing_centre = $card->getProcessingCentre();
    }
}
