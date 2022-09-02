<?php
trait NumberSeriesOne {
    public function numberSeriesA() {
        echo "Number Series One A<br>";
    }
}

trait NumberSeriesTwo {
    public function numberSeriesA() {
        echo "Number Series Two A<br>";
    }
}

class NumberSeries {
    // call/use the traits, and `alias` the methods name
    /*use NumberSeriesOne {
        numberSeriesA as nsA;
    }*/


    // call/use the traits, and `alias` the same named methods from multiple traits
    use NumberSeriesOne, NumberSeriesTwo {
        NumberSeriesOne::numberSeriesA as nsA;
        NumberSeriesTwo::numberSeriesA as nsAA;
    }

    public function numberSeriesA() {
        echo "Printing Number Series A<br>";
    }
}

$ns = new numberSeries();

$ns->nsA();
echo "<br>";
$ns->nsAA();

echo "<br>";
$ns->numberSeriesA();