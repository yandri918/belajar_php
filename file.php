<?php

$message = "selamat datang dan apa kabar";
file_put_contents("conten.txt", $message);

$isi_file = file_get_contents("conten.txt");
echo $isi_file;