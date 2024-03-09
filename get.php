<?php

$nama = $_GET ['nama'];
$alamat = $_GET['alamat'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Get</title>
</head>
<body>
    <form>
        <input type="text" name = "nama" >
        <input type="text" name = "alamat" >
        <input type="submit">
    </form>
    <h1> selamat datang, <?php echo $nama ; ?></h1>
    <p> anda tinggal di <?php echo $alamat; ?></p>
    <p>selamat belajar menggunakan bahasa program PHP</p>
    <?php
if(!empty($_POST['proses']))
{
    print_r($_POST);
}
?>
<form action="" method="post">
Nama: <input type="text" name="nama">
<br><br>
Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
<br><br>
Program Studi :
<select name="program_studi">
  <option value="SI">Sistem Informasi</option>
  <option value="TI">Teknik Informatika</option>
  <option value="MI">Manajemen Informatika</option>
</select>
<br><br>
<input type="submit" name="proses" value="submit">
</form>

</body>
</html>