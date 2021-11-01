<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = 'Peach';
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Check if array has element at index 2
isset($fruits[1]); // true
isset($fruits[4]); // false

// Append element
$fruits[] = 'Banana';
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'foo', 'tangarine');
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element from the end of the array
echo array_pop($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Add element at the beginning of the array
array_unshift($fruits, 'PawPaw');
echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Remove element from the beginning of the array
echo array_shift($fruits);

// Split the string into an array
$string = "Banana, Apple, Peach";
echo "<pre>";
var_dump(explode(",", $string));
echo "</pre>";

// Combine array elements into string
echo implode(" & ", $fruits);

// Check if element exist in the array
in_array("Apple", $fruits); // true

// Search element index in the array
array_search('Apple', $fruits); // returns the index if it exist and returns false if not

// Merge two arrays
$vegetables  = ["Potato", "Cucumber"];
echo "<pre>";
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo "</pre>";

// Sorting of array (Reverse order also)
echo "<pre>";
var_dump($fruits);
echo "</pre>";
sort($fruits);
echo "<pre>";
var_dump($fruits);
echo "</pre>";
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person  = [
    'name' => 'Olorunfemi',
    'surname' => 'Akinlua',
    'age' => 20,
    'hobbies' => ['Football', 'Gaming']
];

echo "<pre>";
print_r($person);
echo "</pre>";

// Get element by key
echo $person['name'].'<br>';
 
// Set element by key
$person['channel'] = 'FemiTeachesEverything';
echo "<pre>";
print_r($person);
echo "</pre>";

// Null coalescing assignment operator. Since PHP 7.4
// if (!isset($person['address'])) {
//     $person['address'] = "unknown";
// }

$person['address'] ??= "unknown";
echo "<pre>";
print_r($person);
echo "</pre>";

// Check if array has specific key

// Print the keys of the array
echo "<pre>";
var_dump(array_keys($person));
echo "</pre>";

// Print the values of the array
echo "<pre>";
var_dump(array_values($person));
echo "</pre>";

// Sorting associative arrays by values, by keys
ksort($person);
echo "<pre>";
print_r($person);
echo "</pre>";

asort($person);
echo "<pre>";
print_r($person);
echo "</pre>";

// Two dimensional arrays
$todos = [
    ['title' => 'Todo Title 1', 'completed' => true],
    ['title' => 'Todo Title 2', 'completed' => false]
];

echo "<pre>";
print_r($todos);
echo "</pre>";