<?php

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require dirname(__DIR__) . '/vendor/autoload.php';
// $loader->addPsr4('SwagPhp\Example\SimpleMode\\', __DIR__ . '/simple-mode');

$swg = \SwagPhp\SwagPhp::nsScan([
    'SwagPhp\Example\SimpleMode\\' => __DIR__ . '/simple-mode'
]);

// --ns "App:./app"