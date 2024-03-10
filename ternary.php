<?php

$ukuran = 'XL';
$warna	= 'merah';
$biaya	= 70000;
if($ukuran=='XL' && $warna=='merah')
{
    $biaya_tambahan	= 5000;
    $total_biaya	= $biaya+$biaya_tambahan;
    echo "Biaya yang dikenakan adalah ".$total_biaya;
}
else
{
    echo "Biaya yang dikenakan adalah ".$biaya;
}
?>