<?php

// Function which prints "Hello I am Zura"
// function hello() {
//     echo "Hello, I'm Zura";
// }

// hello();

// Function with argument
function hello($name) {
    return "Hello, I'm $name";
}

echo hello('Femi').'<br>';
echo hello('Brad').'<br>';

// Create sum of two functions
function sum ($a, $b) {
    return $a + $b;
}

echo sum(5, 5).'<br>';

// Create function to sum all numbers using ...$nums
function sumAll(...$nums) {
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }
    return $sum;
}

echo sumAll(1,2,3,313,121).'<br>';

// Arrow functions
function sumDAll(...$nums) {
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}

echo sumDAll(1,2,3,313,121);