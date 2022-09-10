<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgISMCji3OXmqoNEMtjabV8lvClE4HaR6e22qpwPoaKzrzfCasPlMaulgtAiQheONMj38d1QcWrk163sHQOqXRW00wXr3VstX');
$result = $stripe->products->delete(
    'prod_MP7fpYgiCkocXv',
    []);
var_dump($result);