<?php
$nilai = "0";
switch($nilai){
    case ($nilai>100):
    echo"tolol";
        break;
    case $nilai>=91:
        echo "$nilai : ".  $nilai . "<br>";
        echo "A";
        break;
    case $nilai >=90:
        echo"$nilai: ". $nilai . "<br>";
        echo"B";
        break;
    case $nilai >=80:
        echo"$nilai: ".$nilai ."<br>";
        echo"c";
    case $nilai >=70:
        echo"$nilai: ".$nilai ."<br>";
        echo"e";
        default:
        echo "nilai: ".$nilai . "<br>";
        echo "noob";
        break;
}