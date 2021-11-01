<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b * $c.'<br>';
echo $a - $b.'<br>';
echo $a / $b.'<br>';
echo $a % $b.'<br>';

// Assignment with math operators
$a += $b; echo $a.'<br>';
 
// Increment operator
echo $a++.'<br>'; // 9 (but one has been added to it)
echo ++$a.'<br>'; // 11 (one is added before the print statement)

// Decrement operator
echo $a--.'<br>'; // 11 (but it has been reduced by 1)
echo --$a.'<br>'; // 9 (one is substracted from it before the print statement)

// Number checking functions
is_float(1.24); // true
is_double(1.24); //true
is_int(5); // true
is_numeric('3.45'); // true
is_numeric('31w/34'); // false

// Conversion
$strNumnber = '12.34';
$number = (int)$strNumnber; // or floatvar($number)
var_dump($number);
echo '<br>';

// Number functions
echo "abs(-15) - ". abs(15). ' <br>';
echo "pow(2, 4) - ". pow(2, 4). ' <br>';
echo "sqrt(16) - ". sqrt(16). ' <br>';
echo "max(2, 4) - ". max(2, 4). ' <br>';
echo "min(2, 4) - ". min(2, 4). ' <br>';
echo "round(2.4) - ". round(2.4). ' <br>';
echo "round(2.6) - ". round(2.6). ' <br>';
echo "floor(2.7) - ". floor(2.7). ' <br>';
echo "ceil(2.4) - ". ceil(2.4). ' <br>';

// Formatting numbers
$number = 1234522121211.12;
echo number_format($number, 2, '.', ', ');

// https://www.php.net/manual/en/ref.math.php
