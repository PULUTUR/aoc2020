<?php

$contents = file_get_contents("day1.txt");

$seperateContent = explode("\r\n", $contents);

foreach ($seperateContent as $a) {
    foreach ($seperateContent as $b) {
        if ($a + $b == 2020) {
            echo $a * $b . "\n";
            die();
        }
    }
}