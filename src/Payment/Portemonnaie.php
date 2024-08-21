<?php

namespace TreptowKolleg\OnlineStore\Payment;

class Portemonnaie implements OfflinePaymentInterface
{

    private float $balance;

    /**
     * @param float $balance
     */
    public function __construct(float $balance)
    {
        $this->balance = $balance;
    }

    public function withdraw(float $amount): bool
    {
        if($amount >= 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        } else {
            return false;
        }
    }

    public function deposit(float $amount): bool
    {
        if($amount >= 0) {
            $this->balance += $amount;
            return true;
        } else {
            return false;
        }
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}