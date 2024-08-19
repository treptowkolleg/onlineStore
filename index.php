<?php


use TreptowKolleg\OnlineStore\Payment\PayPal;
use TreptowKolleg\OnlineStore\Payment\Product;
use TreptowKolleg\OnlineStore\Payment\Shop;

require ("vendor/autoload.php");

$shopBankAccount = new PayPal(500);
$shop = new Shop($shopBankAccount);

$laptop = new Product("Thinkpad T14",250);
$coffeeMachine = new Product("Rowenta XL",29.5);

$clientPayPal = new PayPal(220);


$shop->buy($laptop, $clientPayPal);
$shop->buy($coffeeMachine, $clientPayPal);

echo "Kundenkonto ist nun: {$clientPayPal->getBalance()}" . PHP_EOL;
echo "Shop-Konto ist nun: {$shopBankAccount->getBalance()}" . PHP_EOL;
