<?php

//$nama = "andri";
//if($nama == "andri"){
//echo " selamat datang , andriyanto";
//}
//nilai = 91 ;
//if ($nilai > 90 ){
 //   echo "anda lulus";
//} else {
 //   echo "anda gagal";
//}
$nilai = 70;
$wawancara = "A";

if ($nilai >= 85) 
{
	echo "Selamat Anda mendapat Nilai A";
}
elseif($nilai>=70)
{
	echo "Selamat Anda mendapat Nilai B";
}
elseif($nilai>=80)
{
	echo "Anda mendapat Nilai C";
}
else
{  
    echo "Anda mendapat Nilai D";
}
$nilai_test = 90;
$interview = "B";
if($nilai_test >= 70){
    echo "anda lulus.";
    if($interview== "A"){
        echo " predikat anda memuaskan";
    }else if ($interview == "B"){
        echo " anda sudah bagus";
    }else {
        echo "silakan coba lagi di lain waktu";
    }
}else {
        echo "anda belum lulus.";
    }