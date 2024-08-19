<?php

namespace TreptowKolleg\OnlineStore\Payment;

interface PaymentInterface
{

    public function withdraw(float $amount): bool;

    public function deposit(float $amount): bool;

    public function getBalance(): float;

}