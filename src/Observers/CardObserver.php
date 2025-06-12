<?php

declare(strict_types=1);

namespace Khakimjanovich\PCManager\Observers;

use Khakimjanovich\PCManager\Models\Card;

final class CardObserver
{
    public function creating(Card $card): void
    {
        $card->processing_centre = $card->getProcessingCentre();
    }
}
