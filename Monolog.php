<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('Logger');
$log->pushHandler(new StreamHandler('app.log', Logger::INFO));

$log->info('Hello Log');
$log->info('Lagi belajar composer');