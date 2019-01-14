<?php
/**
 * Created by PhpStorm.
 * User: k1785
 * Date: 14.01.2019
 * Time: 21:10
 */

require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/stream_parser.php';

$StreamParser = new StreamParser();
$StreamParser->run();
/*
$firstResolver = new \React\Promise\Deferred();
$secondResolver = new \React\Promise\Deferred();

$pending = [
    $firstResolver->promise(),
    $secondResolver->promise()
];

$promise = \React\Promise\any($pending)->then(function($resolved){
    echo $resolved . PHP_EOL; // 20
});

$loop = \React\EventLoop\Factory::create();

$loop->addPeriodicTimer(0.5, function (React\EventLoop\Timer\Timer $timer){
    echo 'timer'.$timer->getInterval().PHP_EOL;
});

$loop->addTimer(2, function() use ($firstResolver){
    $firstResolver->resolve(10);
});
$loop->addTimer(10, function () use ($secondResolver) {
    $secondResolver->resolve(20);
});

$loop->run();*/