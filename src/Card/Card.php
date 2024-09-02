<?php

namespace App\Card;

class Card
{
    public string $suit;
    public string $rank;
    public int $value = 0;

    public function __construct(string $suit, string $rank, int $value = 0)
    {
        $this->suit = $suit;
        $this->rank = $rank;
        $this->value = $value;
    }

}
