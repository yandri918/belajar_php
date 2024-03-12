<?php
function tulisPesan($nama='andriyan') 
{
  echo "Halo $nama, apa kabarmu Hari ini? Semoga kabarmu sehat dan bahagia selalu<br>";
}
tulisPesan("Meilan");
tulisPesan("andriyanto");
tulisPesan("Naura");
tulisPesan("Mimi");
tulisPesan();

?>
<?php

$kalimat = "saya suka belajar , terutama bidang IT <br>";
echo str_word_count($kalimat);
echo str_replace('IT','komputer',$kalimat)
?>
