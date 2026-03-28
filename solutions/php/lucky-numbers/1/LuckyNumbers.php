<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $num1 = '';
        $num2 = '';
        foreach($digitsOfNumber1 as $digitOfNumber1) {
            $num1 .= $digitOfNumber1;
        }
        foreach($digitsOfNumber2 as $digitOfNumber2) {
            $num2 .= $digitOfNumber2;
        }
        return (int) $num1 + (int) $num2;
    }

    public function isPalindrome(int $number): bool
    {
        $number_str = (string) $number;
        return ($number_str === strrev($number_str)) ? true : false;
    }

    public function validate(string $input): string
    {
        if(empty($input) && $input !== "0"){
            return "Required field";
        }
        if ((int)$input <= 0) {
            return "Must be a whole number larger than 0";
        }
        return "";
    }
}
