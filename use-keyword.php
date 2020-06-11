<?php
use person as clsP;
/* Using alias for the `person` namespcae declared in class-person.php file */

require('class-person.php');

$personObj = new clsP\Person('Raju');
//var_dump($personObj instanceof Person);
echo $personObj->name;
echo '<br>';
echo $personObj->getName();

/* Inheritance or Child class */
class Software_Engineer extends clsP\Person {
    public $salary;

    public function setSalary($salary) {
        return $this->salary = $salary;
    }
    public function getSalary() {
        return $this->salary;
    }
}

$sweObj = new Software_Engineer('Kabir');
$sweObj->setSalary(60000);
$sweObj->age = 27;
echo "<br>";
echo "{$sweObj->name} is {$sweObj->age} years old and his salary {$sweObj->salary}";
?>