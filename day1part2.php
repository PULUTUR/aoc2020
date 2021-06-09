<?php

$contents = file_get_contents("day1.txt");

$seperateContent = explode("\r\n", $contents);

foreach ($seperateContent as $a) {
    foreach ($seperateContent as $b) {
        foreach ($seperateContent as $c) {
            if ($a + $b + $c == 2020) {
                echo $a * $b * $c . "\n";
                die();
            }
        }
    }
}