<?php

class StringUtility {
    public static function shout($string) {
        return strtoupper($string);
    }

    public static function whisper($string) {
        return strtolower($string);
    }

    public static function repeat($string, $times = 2) {
        return str_repeat($string, $times);
    }
}

$stringUtil = new StringUtility();

echo $stringUtil->shout("Hello there");
echo "<br>";
echo $stringUtil->whisper("HELLO EVERYONE");
echo "<br>";
echo $stringUtil->repeat("I am the deveoper of BookBin Morigaon website", 10);