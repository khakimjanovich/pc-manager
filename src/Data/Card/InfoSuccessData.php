<?php

namespace Khakimjanovich\PCManager\Data\Card;

class InfoSuccessData
{
    public function __construct(
        public string $id,
        public string $balance,
        public string $state,
    )
    {
    }
}
