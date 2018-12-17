#!/usr/bin/php
<?php

use Application\Service\ConnectFourGame;

if (!is_file(__DIR__ . '/vendor/autoload.php')) {
    throw new LogicException('The autoload file does not exist, please use composer install');
}
require __DIR__ . '/vendor/autoload.php';

$board = new ConnectFourGame();