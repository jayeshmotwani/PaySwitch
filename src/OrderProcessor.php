<?php

class OrderProcessor {
    private $paymentMethod;

    // The magic of Dependency Injection!
    public function __construct(PaymentMethodInterface $paymentMethod) {
        $this->paymentMethod = $paymentMethod;
    }

    public function process($amount) {
        // It's payday! Let's process that payment using whichever method was injected.
        $this->paymentMethod->pay($amount);
    }
}
