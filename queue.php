<?php
/**
 * Created by PhpStorm.
 * User: k1785
 * Date: 14.01.2019
 * Time: 21:59
 */

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/stream_parser.php';

use Clue\React\Mq\Queue;

$loop = React\EventLoop\Factory::create();
$browser = new Clue\React\Buzz\Browser($loop);


$StreamParser = new StreamParser();


$q = new Queue(3, null, function ($parser) use ($StreamParser) {
    return $StreamParser->runParse($parser);
});
$parsers = $StreamParser->getParsers();
foreach ($parsers as $parser) {
    $q($parser)->then(function ($response) use ($parser) {
        print_r($response. PHP_EOL);
        echo $parser['id'] . ': ' . $parser['url']. PHP_EOL;
    });
}

$loop->run();