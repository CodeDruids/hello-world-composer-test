<?php

/* Autoload files using Composer autoload */
require_once __DIR__.'/../vendor/autoload.php';

use CodeDruids\Samples\HelloWorld;

echo HelloWorld::sayHello('Jack');
