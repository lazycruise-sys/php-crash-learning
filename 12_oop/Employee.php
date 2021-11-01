<?php

class Employee {
    public string $name;
    public string $surname;
    public string $section;
    protected ?int $age;
    public static int $counter = 0;

    public function __construct($name, $surname, $section)
    {
        // echo $surname.', '.$name.'<br>';
        $this->name = $name;
        $this->surname = $surname;
        $this->section = $section;
        $this->age = null;
        self::$counter++;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public static function getCounter()
    {
        return self::$counter;
    }
}

?>