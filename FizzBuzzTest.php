<?php


use PHPUnit\Framework\TestCase;
require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase
{
    public function testCountGiven1ShouldReturn1(){
        // Arrange
        $fizzbuzz = new FizzBuzz();

        // Act
        $actual = $fizzbuzz->count(1);

        // Assert
        $this->assertEquals("1", $actual);
    }

    public function testCountGiven2ShouldReturn2(){
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $actual = $fizzbuzz->count(2);
        //Assert
        $this->assertEquals("2", $actual);
    }

    public function testGiven3ShouldReturnFizz(){
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $actual = $fizzbuzz->count(3);
        //Assert
        $this->assertEquals("fizz", $actual);
    }



}
