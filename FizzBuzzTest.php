<?php


use PHPUnit\Framework\TestCase;
require 'FizzBuzz.php';

class FizzBuzzTest extends TestCase
{
    public function testCountGiven1ShouldReturn1() : void{
        // Arrange
        $fizzbuzz = new FizzBuzz();

        // Act
        $actual = $fizzbuzz->count(1);

        // Assert
        $this->assertEquals("1", $actual);
    }

    public function testCountGiven2ShouldReturn2() : void{
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $actual = $fizzbuzz->count(2);
        //Assert
        $this->assertEquals("2", $actual);
    }

    public function testGiven3ShouldReturnFizz() : void{
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $actual = $fizzbuzz->count(3);
        //Assert
        $this->assertEquals("fizz", $actual);
    }

    public function testGiven5ShouldReturnBuzz() : void{
        //Arrange
        $fizzbuzz = new FizzBuzz();
        // Act
        $actual = $fizzbuzz->count(5);
        //Assert
        $this->assertEquals("buzz", $actual);
    }

}
