# Traits

Traits werden genauso wie Klassen notiert. Sie können später in
anderen Klassen verwendet werden. Angenommen, wir haben ganz viele Klassen,
die ein Label verwenden und die magische Methode ``__toString()``
implementieren müssen. Um nicht für jede Klasse die **Getter**, **Setter** und
Attribute anlegen zu müssen, machen wir dies einfach in einem **Trait**:

````php
<?php

namespace Vendor\Package\Helper;

trait LabelTrait
{

    private string $label;
    
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

Jetzt können wir diesen Trait einfach innerhalb anderer Klassen-Bodys verwenden,
indem wir das ``use``-Statement nutzen:

````php
<?php

namespace Vendor\Package\Entity;

use Vendor\Package\Helper\LabelTrait;

class Person
{
    use LabelTrait;
}
````

Nun verfügt die Klasse ``Person`` über das ``$label``-Attribut sowie über
den **Getter**, den **Setter** und die implementierte ``__toString()``-Methode.