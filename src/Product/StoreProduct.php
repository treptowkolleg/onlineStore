<?php

namespace TreptowKolleg\OnlineStore\Product;

use TreptowKolleg\OnlineStore\Helper\LabelTrait;
use TreptowKolleg\OnlineStore\Helper\PriceTrait;

abstract class StoreProduct
{
    use LabelTrait;
    use PriceTrait;


    public function __construct(string $label, int $price)
    {
        $this->label = $label;
        $this->price = $price;
    }

    public function say(): void
    {
        echo '__CLASS__ Wert: ' . __CLASS__ . "\n";
        echo 'get_called_class() Wert: ' . get_called_class() . "\n";
        echo 'get_class($this) Wert: ' . get_class($this) . "\n";
        echo 'get_class() Wert: ' . get_class() . "\n";
    }

}