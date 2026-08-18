<?php
$hari="senin";
switch ($hari){
    case'senin':
        echo"hari" . $hari . "<br>";
        echo" seragam : putih abu";
        break;
    case'selasa' || 'kamis':
        echo "hari" . $hari . "<br>";
        echo "seragam : jurusan";
        break;
    case'rabu':
        echo"hari" . $hari . "<br>";
        echo"seragam : almet";
        break;
    case 'jumat':
        echo"hari" . $hari . "<br>";
        echo"seragam : pramuka";
        break;
        default:
        echo "hari" . $hari . "<br>";
        echo"seragam : bebas";
        break;
        
}