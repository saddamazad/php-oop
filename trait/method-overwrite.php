<?php
trait NumberSeriesOne {
    public function numberSeriesA() {
        echo "Number Series A<br>";

        /**
         * useful if any Class `extends` a Class(`parent`) that overwrites this function, then overwritten function from the `parent` Class will be executed instead of the trait
         * 
         */
        //parent::numberSeriesA();
    }

    public function numberSeriesB() {
        echo "Number Series B<br>";
    }
}

class NumberSeries {
    // call/use the traits
    use NumberSeriesOne;

    public function numberSeriesA() {
        echo "Printing Number Series A<br>";
    }
}

$ns = new numberSeries();

// it will call the function from the Class, NOT from the trait, because it's overwritten by the Class
$ns->numberSeriesA();




class SomeClass {
    public function numberSeriesA() {
        echo "Printing Number Series A<br>";
    }
}

class SomeClassChild extends SomeClass {
    // call/use the traits
    use NumberSeriesOne;

    /*public function numberSeriesA() {
        echo "SomeClassChild Printing Number Series A<br>";
    }*/
}

$scc = new SomeClassChild();

// it will call the function from the Trait, NOT from the `parent` Class, because when a Class `extends` another Class(`parent`) that overwrites a function from a Trait, the `child` Class will execute the function from the `Trait` {if the function is NOT overwritten by the `child` Class as well}
$scc->numberSeriesA();