<?php
//Put file content in a variable and explode it
$contents = file_get_contents("day3.txt");

$explodeContent = explode("\r\n",$contents);

//Tree Checker position
$position1 = 0;
$position2 = 0;
$position3 = 0;
$position4 = 0;
$position5 = 0;

//variables
$number1 = 0;
$number2 = 0;
$number3 = 0;
$number4 = 0;
$number5 = 0;

//Forest
foreach ($explodeContent as $index => $c){
    $forest = "";
    for ($i = 0; $i <= 150; $i++ ){
        $forest .= $c;
    }
    echo $forest . "<br>";
//Checkers and counters
    $tree1 = substr($forest , $position1,1);
    $position1 = $position1 + 1;

    if ($tree1 == "#"){
        $number1++;
    }

    $tree2 = substr($forest , $position2,1);
    $position2 = $position2 + 3;

    if ($tree2 == "#"){
        $number2++;
    }

    $tree3 = substr($forest , $position3,1);
    $position3 = $position3 + 5;

    if ($tree3 == "#"){
        $number3++;
    }

    $tree4 = substr($forest , $position4,1);
    $position4 = $position4 + 7;

    if ($tree4 == "#"){
        $number4++;
    }

    if($index % 2 == 0){
        $tree5 = substr($forest, $position5, 1);
        $position5 = $position5 + 1;

        if ($tree5 == "#") {
            $number5++;
        }
    }
}

$result = $number1 * $number2 * $number3 * $number4 * $number5;


echo $result;