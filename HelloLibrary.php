<?php

require_once __DIR__ . '/vendor/autoload.php';

use MuhammadFikri\Belajar\Customer;

$customer = new Customer("Fikri");

echo $customer->sayHello("budi") . PHP_EOL;
echo $customer->sayHello() . PHP_EOL;