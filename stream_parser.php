<?php
/**
 * Created by PhpStorm.
 * User: k1785
 * Date: 14.01.2019
 * Time: 22:02
 */

class StreamParser {
    protected $max = 5;
    protected $streams = [];

    public function getParsers(){
        $range = range(1, 20);
        $result = [];
        foreach ($range as $item){
            $result[] = [
                'id' => $item,
                'url' => 'http://site.ru/'.$item,
                'start' => 0,
                'end' => 0,
                'time' => rand(5, 25),
            ];
        }
        return $result;
    }

    public function runParse($parser){
        print_r($parser);
        return true;
    }


}