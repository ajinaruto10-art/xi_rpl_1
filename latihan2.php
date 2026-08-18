
<?php
$angka = [
    [21,22,23,24,25],
    [31,32,33,34,35],
    [41,42,43,44,45],
];
$i = 0;
while($i <count($angka)){
    $ii = 0;
    while($ii<count($angka[$i])) {
    if($ii == 0|| $ii==4){
        echo $angka[$i][$ii]." ";

    }
    $ii++;
    }
    echo"<br>";
    $i++;
}