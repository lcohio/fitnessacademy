<?php

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("pk_live_bwAvIirt4Y7hOa5rIutwkj7c");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

$charge = \Stripe\Charge::create([
    'amount' => '099',
    'currency' => 'usd',
    'description' => 'Real charge',
    'source' => $token,
]);

?>

