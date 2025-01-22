<?php

/**
 * INSTRUCTIONS:
 * Write a class named Math.
 * Add static methods add(), subtract(), and multiply().
 * Use these methods to perform mathematical operations on two numbers.
 */
class Math
{
    public float $num1;
    public float $num2;


    public function __construct(float $num1, float $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }


    public static function add($num1, $num2)
    {
        return $num1 + $num2;
    }
    public static function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }
    public static function muntiply($num1, $num2)
    {
        return $num1 * $num2;
    }
}

$math = new Math(10, 5);

echo "Addition: " . Math::add($math->num1, $math->num2);
echo "Subtraction: " . Math::subtract($math->num1, $math->num2);
echo "Multiplication: " . Math::muntiply($math->num1, $math->num2);
