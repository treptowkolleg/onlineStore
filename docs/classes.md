# Klassen

Klassen können andere Klassen erweitern. Man spricht dann davon, dass die
Unterklasse von der Oberklasse erbt. Unterklassen spezialisieren also ihre
Oberklassen und Oberklassen generalisieren Gemeinsamkeiten ihrer Unterklassen.

````php
<?php

namespace Vendor\Package;

abstract class Oberklasse
{

    public function __construct
    (
        private string $label
    )
    {
    
    }
    
    public function __toString() : string
    {
        return $this->getLabel();
    }
    
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }
    
    public function getLabel(): string
    {
        return $this->label;
    }

}
````

Unterklassen benutzen ``extends`` um anzugeben, von welcher Klasse geerbt
werden soll. Unterklassen erhalten damit alle Attribute und Methoden, die
nicht von der Oberklasse auf ``private`` gesetzt wurden. Nicht öffentliche
Attribute sollten daher den Modifier ``protected`` nutzen.

````php
<?php

namespace Vendor\Package;

class Unterklasse extends Oberklasse
{
    public function __construct
    (
        private int $number,
        string $label
    )
    {
        parent::__construct($label);
    }
    
    public function getNumber(): int
    {
        return $this->number;
    }
    
    public function setNumber(int $number): void 
    {
        $this->number = $number;
    }
    
}
````

Unterklassen dürfen aber auch Attribute und Methoden überschreiben. Hierbei
hat die Methode der Unterklasse Priorität, jedoch kann von der Unterklasse
auch auf gleichnamige Methoden der Oberklasse zugegriffen werden:

````php
<?php

namespace Vendor\Package;

class Unterklasse extends Oberklasse
{
    public function __construct
    (
        private int $number,
        string $label
    )
    {
        parent::__construct($label);
    }
    
    public function getNumber(): int
    {
        return $this->number;
    }
    
    public function setNumber(int $number): void 
    {
        $this->number = $number;
    }
    
    public function getLabel(): string
    {
        return "Unterklasse sagt: " . parent::getLabel();
    }
    
}
````