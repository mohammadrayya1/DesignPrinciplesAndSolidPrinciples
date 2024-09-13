<?php

namespace SOLID\CompositionInheritance;

class Pizza
{
    public $price = 10;
    public array $toppings = [];

    public function addTopping(ITopping $topping): void
    {
        $this->toppings[] = $topping;
    }


    public function getToppings(): array
    {
        return $this->toppings;
    }

    private function calculate()
    {

        $price = $this->price;
        foreach ($this->toppings as $item) {
            $price += $item->getPrice();
        }
        return $price;

    }

    public function __toString()
    {
        $lineBreak = (php_sapi_name() == "cli") ? "\n" : "<br>";
        $result = basename(str_replace('\\', '/', static::class)) . " BasePrice is $this->price \n The Toppings are: $lineBreak";

        foreach ($this->toppings as $item) {
            $result .= $item->getTitle() . " Price is " . $item->getPrice() . "$lineBreak";
        }
        $result .= "Total is  " . $this->calculate();

        return $result;
    }

}