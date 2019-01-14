<?php
/**
 * Created by PhpStorm.
 * User: k1785
 * Date: 13.01.2019
 * Time: 19:15
 */
require __DIR__ . '/vendor/autoload.php';

$loop = React\EventLoop\Factory::create();
$loop->addTimer(0.8, function () {
    echo 'world!' . PHP_EOL;
});
$loop->addTimer(0.3, function () {
    echo 'hello ';
});
$loop->run();
