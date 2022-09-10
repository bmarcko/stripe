<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51LgISMCji3OXmqoNEMtjabV8lvClE4HaR6e22qpwPoaKzrzfCasPlMaulgtAiQheONMj38d1QcWrk163sHQOqXRW00wXr3VstX');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/Stripe';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    'price' => 'price_1LgK2wCji3OXmqoNTjZiNyM5',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);