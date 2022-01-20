<?php


class FizzBuzz
{

    public function count($number):string
    {
        if($number % 3 == 0) return "fizz";
        elseif ($number % 5 == 0) return "buzz";
        elseif($number % 3 == 0 && $number % 5 == 0) return "fizzbuzz";
        else return $number;

    }
}