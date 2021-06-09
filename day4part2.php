<?php

$contents = file_get_contents("day4.txt");

$explodeContent = explode("\r\n\r\n",$contents);

$good = 0;

foreach ($explodeContent as $c){
    $replace = str_replace("\r\n"," ",$c);
    $explodeContent2 = explode(" ",$replace);
    echo "<br>";
    foreach ($explodeContent2 as $c2){
        echo $c2 . "<br>";
    }
    $cidCheck = substr_count($c,"cid");
    $passCheck = count($explodeContent2);

    if ($passCheck == 8){
        $good++;
    }
    if ($passCheck == 7 && $cidCheck == 0){
        $good++;
    }
}

echo "<br>There are " . $good . " good passports";

//echo substr($c,4, 10) . "<br>";
//Onthoud dit ff