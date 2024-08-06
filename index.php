<?php

use TreptowKolleg\OnlineStore\Entity\Person;
use TreptowKolleg\OnlineStore\Product\BookProduct;

require ("vendor/autoload.php");

// Traits Beispiel
$ben = new Person();
$ben->setLabel("Ben");
echo $ben . PHP_EOL;

// Vererbung von abstrakter Oberklasse Beispiel
$book = new BookProduct("Enigma",995,"Robert", "Harris", 356);
$book->say();