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
    $position1 = substr_count($p, $pChar,$pMin -1,1);
    $position2 = substr_count($p, $pChar,$pMax -1,1);
    if ($position1 == 1 XOR $position2 == 1) {
        $amount++;
    }
}
echo $amount;