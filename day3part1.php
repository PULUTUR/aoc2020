<?php
//Put file content in a variable and explode it
$contents = file_get_contents("day3.txt");

$explodeContent = explode("\r\n",$contents);

//Tree Checker position
$position = 0;

//Tree variable and amount of trees
$tree = "";
$number = 0;

//Forest
foreach ($explodeContent as $c){
    $forest = "";
    for ($i = 0; $i <= 50; $i++ ){
        $forest .= $c;
    }
    echo $forest . "<br>";

    //Tree Checker
    $tree = substr($forest , $position,1);
    $position = $position + 3;

    //Tree counter
    if ($tree == "#"){
        $number++;
    }
}

echo $number;