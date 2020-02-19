<?php
declare(strict_types=1);

class Calculator
{
    private $fixedArray =[];
    private $variableArray =[];

    public function makeDiscountArrays($array)
    {

        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i]->getFixedDiscount() != 0) {
                array_push($this->fixedArray, $array[$i]->getFixedDiscount());
                return $this->fixedArray;
            }
            if ($array[$i]->getVariableDiscount() != 0) {
                array_push($this->variableArray, $array[$i]->getVariableDiscount());
                return $this->variableArray;
            }

        }
    }
}