<?php
include "latohan2.php";
 $i = 0;
 $total = count($NamaSiswa);
 while($i<$total){
    if($NamaSiswa[$i]["umur"] ==17){
echo "Nama: " . $NamaSiswa[$i]["nama"] . " | Umur: " . $NamaSiswa[$i]["umur"] . " tahun | Alamat: " . $NamaSiswa[$i]["alamat"] . "<br>\n";
    }
    $i++;
 }
?>