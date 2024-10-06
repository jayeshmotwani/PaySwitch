<?php

// Import classes
require_once 'src/PaymentMethodInterface.php';
require_once 'src/Paypal.php';
require_once 'src/CreditCard.php';
require_once 'src/OrderProcessor.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PaySwitch: Payment Demo</title>
    <!-- Bootstrap CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CDN for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Light background */
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            background-color: #343a40; /* Dark background for navbar */
        }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .container {
            margin-top: 20px;
        }
        h1 {
            text-align: center;
            color: #343a40;
            margin-bottom: 30px;
        }
        .payment-section {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            color: white; /* Text color for better readability */
        }
        #paypal {
            background-color: #007bff; /* Blue for PayPal */
        }
        #creditcard {
            background-color: #28a745; /* Green for Credit Card */
        }
        .header {
            margin-bottom: 20px;
            text-align: center;
        }
        .header h2 {
            color: white; /* White text for headers */
        }
        .btn {
            background-color: #28a745; /* Green button */
            color: white !important;
        }
        .btn:hover {
            background-color: #218838; /* Darker green on hover */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">PaySwitch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="#paypal">PayPal Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#creditcard">Credit Card Payment</a>
                </li> -->
            </ul>
            <a href="https://github.com/yourusername/yourproject" target="_blank" class="nav-link">
                <i class="fab fa-github"></i> GitHub
            </a>
        </div>
    </nav>

    <div class="container">
        <h1>PaySwitch: Injecting Payment Flexibility (Demo)</h1>
        <div class="payment-section" id="paypal">
            <div class="header">
                <h2>PayPal Payment</h2>
            </div>
            <div>
                <?php
                // Process a PayPal payment
                $paypal = new Paypal();
                $orderProcessor = new OrderProcessor($paypal);
                $paypalResponse = $orderProcessor->process(100); // "sending $100 to Elon Musk's intergalactic PayPal"
                ?>
                <p><?= $paypalResponse ?></p>
            </div>
        </div>
        
        <div class="payment-section" id="creditcard">
            <div class="header">
                <h2>Credit Card Payment</h2>
            </div>
            <div>
                <?php
                // Process a Credit Card payment
                $creditCard = new CreditCard();
                $orderProcessor = new OrderProcessor($creditCard);
                $creditCardResponse = $orderProcessor->process(amount: 250); // "thanks for your loyalty, here's $250 charged to your card"
                ?>
                <p><?= $creditCardResponse ?></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
