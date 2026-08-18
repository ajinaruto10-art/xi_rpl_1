<?php
$angka = [
    [11,12,13,14,15,16,17,18],
    [21,22,23,24,25],
    [31,32,33,34,35,36,37]
];
$i = 0;
while($i <count($angka)){
    for($j =0; $j< count($angka[$i]); $j++){
        echo "". $angka[$i][$j] . "<br>";
    }
    echo"<br>";
    $i++;
}