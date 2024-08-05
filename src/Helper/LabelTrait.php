<?php

namespace TreptowKolleg\OnlineStore\Helper;

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