<?php


class FizzBuzz
{

    public function count($number):string
    {
        if($this->isMultipleOf3($number) && $this->isMultipleOf5($number)) return "fizzbuzz";
        elseif($this->isMultipleOf3($number)) return "fizz";
        elseif ($this->isMultipleOf5($number)) return "buzz";
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

    /**
     * @param $number
     * @return bool
     */
    public function isMultipleOf5($number): bool
    {
        return $number % 5 === 0;
    }
}