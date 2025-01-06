<?php

/**
 * INSTRUCTIONS:
 * Refactor the code below in a class called Statistics
 */

$numbers = [10, 5, 8, 20, 3, 15];

function getSum(array $numbers): float
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

function getAverage(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    return getSum($numbers) / count($numbers);
}

function getMin(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    $min = $numbers[0];
    foreach ($numbers as $number) {
        if ($number < $min) {
            $min = $number;
        }
    }
    return $min;
}

function getMax(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}

// Exemple d’utilisation
echo "Tableau de nombres : " . implode(", ", $numbers) . "\n";
echo "Somme : " . getSum($numbers) . "\n";
echo "Moyenne : " . getAverage($numbers) . "\n";
echo "Valeur minimale : " . getMin($numbers) . "\n";
echo "Valeur maximale : " . getMax($numbers) . "\n";
