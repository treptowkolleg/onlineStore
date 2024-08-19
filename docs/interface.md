

````php
<?php

interface PaymentMethod {
    
    public function withdraw(int $amount): bool
    
    public function deposit(int $amount): bool
    
    public function getBalance(): int   
    
}
````