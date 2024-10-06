
# PaySwitch: Injecting Payment Flexibility

Welcome to **PaySwitch**, a demo project that showcases the power of **Dependency Injection** in PHP. In this project, you'll see how DI helps make a simple payment processor more flexible and easier to maintain.

## Table of Contents
- [Introduction](#introduction)
- [What is Dependency Injection?](#what-is-dependency-injection)
- [Project Structure](#project-structure)
- [How it Works](#how-it-works)
- [Setup Instructions](#setup-instructions)
- [Humorous Bits](#humorous-bits)
- [Future Enhancements](#future-enhancements)

## Introduction

**PaySwitch** is a PHP-based application designed to demonstrate how you can decouple components using Dependency Injection (DI). It allows the flexibility to switch between different payment methods (like PayPal and Credit Card) without altering the core processing logic.

The project simulates a simple order processor that can "inject" different payment methods at runtime — pretty neat, huh?

## What is Dependency Injection?

In simple terms, **Dependency Injection (DI)** is a design pattern that allows an object to receive its dependencies from the outside, rather than creating them internally. This makes the system more flexible and easier to maintain.

In our case:
- The **OrderProcessor** doesn’t care how the payment is made, as long as it can process a payment through an injected payment method.
- This is the beauty of DI: It promotes separation of concerns and makes our code more modular and testable.

## Project Structure

```
PaySwitch/
│
├── src/
│   ├── PaymentMethodInterface.php      # Interface for payment methods
│   ├── Paypal.php                      # PayPal payment method
│   ├── CreditCard.php                  # Credit Card payment method
│   └── OrderProcessor.php              # Main order processor
│
├── index.php                           # Entry point demonstrating DI in action
├── composer.json                       # Composer autoload config
└── README.md                           # You're reading this right now!
```

### Key Files
- **`PaymentMethodInterface.php`**: Interface defining the structure for payment methods.
- **`Paypal.php`**: Class for handling PayPal payments.
- **`CreditCard.php`**: Class for handling credit card payments.
- **`OrderProcessor.php`**: The core processor that accepts different payment methods via Dependency Injection.
- **`index.php`**: Demonstrates how to switch payment methods at runtime by injecting dependencies.

## How it Works

1. **OrderProcessor** takes any payment method implementing the `PaymentMethodInterface` as a constructor parameter.
2. You can inject different payment methods (like PayPal or Credit Card) into the **OrderProcessor** without changing its logic.
3. It processes payments based on the injected payment method, demonstrating how flexible and maintainable the system becomes.

### Example
```php
$paypal = new Paypal();
$orderProcessor = new OrderProcessor($paypal);
$orderProcessor->process(100);  // Processes $100 using PayPal

$creditCard = new CreditCard();
$orderProcessor = new OrderProcessor($creditCard);
$orderProcessor->process(250);  // Processes $250 using Credit Card
```

## Setup Instructions

To run the project locally, follow these steps:

### 1. Clone the Repository
```bash
git clone https://github.com/jayeshmotwani/PaySwitch.git
cd PaySwitch
```

### 2. Install Dependencies
Make sure you have Composer installed, then run:
```bash
composer install
```

### 3. Run the Project
Since this is a simple PHP project, you can use PHP's built-in server:
```bash
php -S localhost:8000
```

Now, open your browser and visit `http://localhost:8000` to see the magic happen!

## Humorous Bits

- "This project is so flexible, even my yoga instructor is jealous."
- "Decoupling code one payment method at a time!"
- "No space rockets were harmed in the making of this code."

## Future Enhancements

1. **Add more payment methods**: We could inject methods like Bitcoin or Apple Pay just to impress even more tech-savvy interviewers!
2. **Unit tests**: Write some PHPUnit tests to demonstrate how easy it is to mock dependencies in a DI setup.
3. **Front-end**: Build a simple UI to select payment methods dynamically, using JavaScript.

---
