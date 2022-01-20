<?php


class FizzBuzz
{

    public function count($number):string
    {
        if($number % 3 == 0 && $number % 5 == 0) return "fizzbuzz";
        elseif($this->isMultipleOf3($number)) return "fizz";
        elseif ($number % 5 === 0) return "buzz";
        else return strval($number);

    }

    /**
     * @param $number
     * @return bool
     */
    public function isMultipleOf3($number): bool
    {
        return $number % 3 === 0;
    }
}