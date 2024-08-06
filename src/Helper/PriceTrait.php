<?php

namespace TreptowKolleg\OnlineStore\Helper;

trait PriceTrait
{

    private int $price;

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

}