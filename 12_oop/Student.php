<?php

require_once "Employee.php";

class Student extends Employee
{
    public string $studentID;

    public function __construct($name, $surname, $section, $studentID)
    {
        parent::__construct($name, $surname, $section);
        $this->studentID = $studentID;
        $this->age = 19;
    }
}

?>