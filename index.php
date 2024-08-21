<?php


use TreptowKolleg\OnlineStore\Payment\PayPal;
use TreptowKolleg\OnlineStore\Payment\Portemonnaie;
use TreptowKolleg\OnlineStore\Payment\Product;
use TreptowKolleg\OnlineStore\Payment\Shop;

require ("vendor/autoload.php");

$shopBankAccount = new PayPal(500);
$shop = new Shop($shopBankAccount);

$laptop = new Product("Thinkpad T14",250);
$coffeeMachine = new Product("Rowenta XL",29.5);

// Online-Zahlungsmittel:
$clientPayPal = new PayPal(220);

// Offline-Zahlungsmittel:
$clientPortemonnaie = new Portemonnaie(30);


$shop->buy($laptop, $clientPayPal);

// Portemonnaie funktioniert nicht, weil es kein Online-Zahlungsmittel ist.
$shop->buy($coffeeMachine, $clientPortemonnaie);

echo "Kundenkonto ist nun: {$clientPayPal->getBalance()}" . PHP_EOL;
echo "Shop-Konto ist nun: {$shopBankAccount->getBalance()}" . PHP_EOL;
