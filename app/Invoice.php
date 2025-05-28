<?php
declare(strict_types=1);
namespace App;

class Invoice
{
    private string $name;
    private string $description;
    private float $price;
    public function __construct()
    {
        
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    


}
