<?php
/**
 * traits are like Classes but trait can't be initialized like objects, trait should be used inside class
 * 
 * trait contains the common methods/functions, then these functions from the traits are used by the classes
 * 
 * The function's scope should remain the same like in the trait when used inside a class, if a function is defined as `private` in the Trait, it should be `private` in the Class as well.
 */
trait NumberSeriesOne {
    private function numberSeriesA() {
        echo "Number Series A<br>";
    }

    /*public function numberSeriesA() {
        echo "Number Series A<br>";
    }*/

    public function numberSeriesB() {
        // calling the private method
        $this->numberSeriesA();

        echo "Number Series B<br>";
    }
}

trait NumberSeriesTwo {
    // trait can use other traits
    use NumberSeriesOne;

    public function numberSeriesC() {
        echo "Number Series C<br>";
    }

    public function numberSeriesD() {
        echo "Number Series D<br>";

        // calling a `private` method, from another `trait`
        $this->numberSeriesA();
    }
}

class NumberSeries {
    // call/use the traits
    use NumberSeriesTwo;

    //use NumberSeriesOne, NumberSeriesTwo;
}

$ns = new NumberSeries();
//$ns->numberSeriesA();
$ns->numberSeriesB();
echo "<br>";
$ns->numberSeriesD();
echo "<br>";
$ns->numberSeriesC();