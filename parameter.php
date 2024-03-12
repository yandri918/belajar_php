<?php
function gantiNama(&$nama)
{
    $nama="nama baru";
}
$nama="Risa";
gantiNama($nama);
echo $nama;

function kalilipat (&$angka){
    $angka= $angka *2 ;
}
$x =5 ;
echo $x.'<br>';
kalilipat($x);