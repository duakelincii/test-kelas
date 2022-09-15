<?php


$string1 = "aaaabbsdfbhckkhfdkml";


    echo "String 1 = ".$string1."</br>";
    $a=count_chars($string1, 1);
    //perulangan untuk tidak menampilkan huruf yang hanya 1
    foreach($a as $key => $s){
        if ($s == 1){
            echo null;
        }else{
            echo(chr($key).$s);
        }
    }

$string = "aabbckkkml";

echo "</br>"."String = ".$string."</br>";
$a=count_chars($string, 1);
foreach($a as $key => $s){
    if ($s == 1){
        echo null;
    }else{
        echo(chr($key).$s);
    }
}

?>