<?php


class FizzBuzz
{

    public function count($number):string
    {
        if($number == 3) return "fizz";
        elseif ($number == 5) return "buzz";
        else return $number;

    }
}