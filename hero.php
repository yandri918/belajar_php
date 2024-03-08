<?php

$namaHero = "andri";
$level = 6 ;
if($level < 4) {
    echo $namaHero."belum memiliki ulti";
} else if($level >=4){
    echo $namaHero."sudah memiliki ulti";
}else {
    echo $namaHero."tidak bermain";
}