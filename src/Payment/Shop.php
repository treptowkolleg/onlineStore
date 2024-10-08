<?php

namespace TreptowKolleg\OnlineStore\Payment;

class Shop
{


    public function __construct
    (
        private OnlinePaymentInterface $bankAccount
    )
    {
    }

    public function buy(Product $product, OnlinePaymentInterface $payment): void
    {
        echo "Sie haben {$payment->getBalance()} Geld zur Verfügung." . PHP_EOL;
        sleep(2);
        echo "{$product->getName()} kostet {$product->getPrice()}." . PHP_EOL;
        sleep(2);
        if($payment->withdraw($product->getPrice())) {
            echo "Sie haben erfolgreich {$product->getName()} für {$product->getPrice()} Geld gekauft." . PHP_EOL;
            sleep(2);
            echo "Sie haben nun noch {$payment->getBalance()} Geld zur Verfügung." . PHP_EOL;
            $this->bankAccount->deposit($product->getPrice());
        } else {
            $difference = $product->getPrice() - $payment->getBalance();
            echo "Ihnen fehlen noch $difference Geld zum Kauf von {$product->getName()}" . PHP_EOL;
        }
    }

    public function getBankAccount(): OnlinePaymentInterface
    {
        return $this->bankAccount;
    }

    public function setBankAccount(OnlinePaymentInterface $bankAccount): void
    {
        $this->bankAccount = $bankAccount;
    }

}