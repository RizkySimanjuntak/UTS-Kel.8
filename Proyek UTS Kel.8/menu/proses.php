<?php

$proses = filter_input (INPUT_GET, 'proses');
if(isset($proses)){
$nama =filter_input(INPUT_GET, "nama");
$lokasi =filter_input(INPUT_GET, "lokasi");
$pesanan =filter_input (INPUT_GET, "pesanan");
$jumlah =filter_input(INPUT_GET, "jumlah");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="color:green; font-size:20px"><b>Pesanan Diterima</b></p>
    <br>
    <p>Terima Kasih</p>
    <p><i><u><b>Pesanan Anda atas Nama :<?php echo $nama ?></b></u></i></p>
    <p style="color:purple;"><b>Dengan Alamat : <?php echo $lokasi; ?></b></p>
    <p><b>Jenis Pesanan : <?php echo $pesanan?></b></p>
    <p><b>Dengan Jumlah Pesanan : <?php echo $jumlah; ?> buah</b></p>
    <p><b>Akan Segera Kami Proses</b></p>
    <br>
    <p>Silahkan Tunggu Pesanan Anda hingga driver kami sampai ke lokasi anda!</p>
</body>
</html>