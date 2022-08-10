<?php

require_once __DIR__ . '/vendor/autoload.php';

use MuhammadFikri\Data\People;

$people = new People("Fikri");

$people->sayHello("Budi");