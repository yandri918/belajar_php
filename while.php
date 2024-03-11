<?php
$arr_warna	= ['merah','biru','kuning','merah','hijau','biru','merah','biru','kuning','merah','hijau','biru'];
$jumlah	=0;
$i		=0;
while($i<=11)
{
    if($arr_warna[$i]=='biru')
    {
        $jumlah++;
    }
    $i++;
}
echo "Jumlah warna biru ".$jumlah;
while($i<=11)
{
    if($arr_warna[$i]=='kuning')
    {
        $jumlah++;
    }
    $i++;
}
echo "Jumlah warna kuning ".$jumlah;

$x=1;
do
{
    echo "Nomor Antrian yang tersedia: $x <br>";
    $x++;
}
while ($x <= 15);
?>