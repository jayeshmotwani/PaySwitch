<?php

class CreditCard implements PaymentMethodInterface {
    public function pay($amount) {
        // Credit card payment logic (e.g., "please don't max out your card on space rockets!")
        echo "Paid $amount using Credit Card. Your bank called, they said 'thanks for the loyalty'.\n";
    }
}
