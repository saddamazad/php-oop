<?php
require('class-person.php');

/* Creating object using the `\person\` namespace defined in class-person.php file */
/* The initial backslash `\` refers to the root of the Class directory */
$personObj = new \person\Person('Azad');
echo $personObj->name;
echo '<br>';
echo $personObj->getName();

/* Inheritance or Child class */
class Software_Engineer extends \person\Person {
    public $salary;

    public function setSalary($salary) {
        return $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
}

$sweObj = new Software_Engineer('Raihan');
$sweObj->setSalary(75000);
echo "<br>";
echo "{$sweObj->name} is {$sweObj->age} years old and his salary {$sweObj->salary}";
?>