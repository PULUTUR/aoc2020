<?php
$contents = file_get_contents("day2.txt");

$explodeContent = explode("\r\n", $contents);
$amount = 0;
foreach ($explodeContent as $c) {
    $seperateContent = str_replace("-", " ", $c);
    $seperateContent = str_replace(":", "", $seperateContent);
    $explodeReplace = explode(" ", $seperateContent);
    $pMin = $explodeReplace[0];
    $pMax = $explodeReplace[1];
    $pChar = $explodeReplace[2];
    $p = $explodeReplace[3];
    $count = substr_count($p, $pChar);
    if ($count >= $pMin && $count <= $pMax) {
        $amount++;

    }
}
echo $amount;