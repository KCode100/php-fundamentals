<?php
class Person {
    public $name;
    public $age;
    public $status;
    public function __construct($name, $age, $status)  {
        $this->name = $name;
        $this->age = $age;
        $this->status = $status;
    }
    public function msg() {
        return "Hello, my name is $this->name, I am $this->age years old, and I am $this->status.";
    }
}

$newPerson = new Person("Kivi", 27, "married");
echo $newPerson -> msg();

echo "<br>";

$newPerson = new Person ("Chani", 22, "married");
echo $newPerson -> msg();
?>
