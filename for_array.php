<?php

//$arr_warna = ['merah','biru','kuning','merah','hijau','biru'];
//$jumlah = 3;
//if($arr_warna[0]=='merah')
//{
//    $jumlah++;
//}
//if($arr_warna[1]=='merah')
//{
 //   $jumlah++;
//}
//if($arr_warna[2]=='merah')
//{
  //  $jumlah++;
//}
//if($arr_warna[3]=='merah')
//{
  //  $jumlah++;
//}
//if($arr_warna[4]=='merah')
//{
 //   $jumlah++;
//}
//if($arr_warna[5]=='merah')
//{
  //  $jumlah++;
//}

//echo $jumlah;
$arr_warna	= ['merah','biru','kuning','merah','hijau','biru','merah','biru','kuning','merah','hijau','biru','hijau'];
$jumlah=0;
//jumlah elemen array ada 11
for($i=0;$i<13;$i++)
{
    if($arr_warna[$i]=='hijau')
    {
        $jumlah++;
    }
}
echo "Jumlah warna hijau ".$jumlah;

?>