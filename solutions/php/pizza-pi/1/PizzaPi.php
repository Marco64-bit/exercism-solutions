<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas, $sauce)
    {
        return $pizzas * 125 / $sauce ;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $diameter)
    {
        $pizzas = floor(($cheese_dimension ** 3) / ($thickness * 3.14 * $diameter));
        return $pizzas;
    }

    public function calculateLeftOverSlices($pizzas, $friends)
    {
        return $pizzas * 8 % $friends;
    }
}
