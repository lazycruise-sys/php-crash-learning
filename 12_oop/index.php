<?php
require_once "Employee.php";
require_once "Student.php";

// What is class and instance

// Create Person class in Person.php
class Person {
    public $name;
    public $surname;
    private $age;
}

// Create instance of Person
$p = new Person();
$p->name = 'Femi';
$p->surname = 'Akinlua';
echo "<pre>";
var_dump($p);
echo "</pre>";

echo $p->surname.', '.$p->name.'<br>';

$x = new Employee("Scott", "Travis", "Music");
echo "<pre>";
var_dump($x);
echo "</pre>";

# Set Age (Private Value)
$x->setAge(24);
echo "<pre>";
var_dump($x);
echo "</pre>";

echo Employee::$counter.'<br>';

$y = new Employee("Washington", "Denzel", "Movies");
echo Employee::getCounter();

// Using setter and getter

// Create Student Instance (inherits properties from the Employee class)
$student = new Student("Jacob", "Arigbede", "Cloud", "MEE/2015/121");
echo "<pre>";
var_dump($student);
echo "</pre>";