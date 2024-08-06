<?php

namespace TreptowKolleg\OnlineStore\Product;

class BookProduct extends StoreProduct
{

    /*
     * Attribute können direkt im Constructor deklariert werden.
     * Dadurch spart man sich die Zuordnungen.
     */
    public function __construct
    (
        // Parameter, die an die Oberklasse übergeben werden sollen:
        string                  $label,
        int                     $price,

        // Parameter, die als Attribute deklariert werden sollen:
        private readonly string $authorFirstname,
        private readonly string $authorLastname,
        private readonly int    $pages
    )
    {
        parent::__construct($label, $price);
    }

    public function getAuthorFirstname(): string
    {
        return $this->authorFirstname;
    }

    public function getAuthorLastname(): string
    {
        return $this->authorLastname;
    }

    public function getAuthorFullName(): string
    {
        return $this->authorFirstname . ' ' . $this->authorLastname;
    }

    public function getPages(): int
    {
        return $this->pages;
    }

}