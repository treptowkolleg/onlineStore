

````php
<?php

interface PaymentMethod {
    
    public function withdraw(int $amount): bool
    
    public function deposit(int $amount): bool
    
    public function getBalance(): int   
    
}
````


````php
<?php

class PayPal implements PaymentMethod
{
    private int $balance;

    public function withdraw(int $amount): bool
    {
        if($amount > 0 && $this->balance - $amount >= 0) {
            $this->balance -= $amount;
        } else {
            return false;
        }
        return true;
    }
    
    public function deposit(int $amount): bool
    {
        if($amount > 0) {
            $this->balance += $amount;
        } else {
            return false;
        }
        return true;
    }
    
    public function getBalance(): int
    {
        return $this->balance;
    } 
    
}

````

````php
<?php

class OnlineShop
{
    
    public function buy(Product $product, PaymentMethod $payment): void
    {
        if($payment->withdraw($product->getPrice())) {
            echo "$product wurde gekauft.";
        } else {
            echo "Nicht genug Geld verfügbar.";
        }
    }
    
}

````