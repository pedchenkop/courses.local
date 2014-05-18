<?php

require '../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

$logger = new Logger('my_logger');
$logger->pushHandler(new StreamHandler(__DIR__.'/log/my_app.log', Logger::DEBUG));
$logger->pushHandler(new FirePHPHandler());

var_dump(__DIR__);
echo "vasa";
$a = 12;
$logger->addInfo('My Logger is now ready!');