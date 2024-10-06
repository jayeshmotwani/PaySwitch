<?php

class Paypal implements PaymentMethodInterface {
    public function pay($amount) {
        // PayPal payment logic (e.g., "sending money to Elon Musk's intergalactic PayPal")
        echo "Paid $amount using PayPal. Thank you for choosing space-age payments!\n";
    }
}
