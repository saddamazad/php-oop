<?php
/**
 * Making two classes compatible with each other by creating another class. This new class is called the `adapter` or `bridge` between the two classes.
 * 
 * Actually making an existing Class compatible with an `interface` by creating a new Adapter Class.
 */


interface PaymentGateway {
    public function sendPayment($payment);
}

class PaymentProcessor {
    private $gateway;

    public function __construct(PaymentGateway $pg) {
        $this->gateway = $pg;
    }

    function purchaseProduct($amount) {
        $this->gateway->sendPayment($amount);
    }
}

class Paypal implements PaymentGateway {
    function sendPayment($amount) {
        echo "{$amount} Processed by Paypal";
    }
}

$paypal = new Paypal();
$pp = new PaymentProcessor($paypal);
$pp->purchaseProduct(45);
echo "<br>";



// Stripe Class doesn't implement the `PaymentGateway` interface, so it can't be passed/injected to the `PaymentProcessor` Class
class Stripe {
    function makePayment($amount, $currency=null) {
        echo "{$amount} Processed by Stripe";
    }
}

// We are creating an Adapter Class to make the Stripe Class compatible with the `PaymentGateway` interface
class StripeAdapter implements PaymentGateway {
    private $stripe;

    public function __construct(Stripe $stripe) {
        $this->stripe = $stripe;
    }

    function sendPayment($amount) {
        $this->stripe->makePayment($amount);
    }
}

$stripe = new Stripe();
$sa = new StripeAdapter($stripe);
$sa->sendPayment(45);