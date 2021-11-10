<?php
$submit = FILTER_INPUT(INPUT_GET,'submit');
$txt1 ="Terima kasih"
$txt2 ="pesanan anda akan segera kami proses"
if(isset($submit)){
	$namapesananan = FILTER_INPUT(INPUT_GET,"namapesanan");
	$lokasi = FILTER_INPUT(INPUT_GET,"lokasi");
	$pesanan = FILTER_INPUT(INPUT_GET,"pesananan");
	$jumlahpesanan = FILTER_INPUT(INPUT_GET,"jumlahpesanan");
}
?>
<html>
</head>
<body>
  <div class="container">
        <div class="logo">
            <a href="index.html">Local Culinary</a>
        </div>
        <div class="nav">
            <ul>
                <li><a href="index.html">Beranda</a></li>
                <li><a href="menu/makanan.html">Makanan</a></li>
                <li><a href="menu/lokasi.html">Lokasi</a></li>
                <li><a href="menu/pesan.php">Pesan</a></li>
                <li><a href="menu/tentang.html">Tentang</a></li>
                <li><a href="menu/contact.html" class="cs">Contact Us</a></li>
            </ul>
     </div>
        <div class="pesan">
		<table>
		<p><b>Pesanan Diterima</b></p>
		<br>
		<p>Terima Kasih</p>
		<p><i><u><b>Pesanan Anda atas Nama :<?php echo $namapesanan ?></b></u></i></p>
		<p><b>Dengan Alamat : <?php echo $lokasi ?></b></p>
		<p><b>Jenis Pesanan : <?php echo $pesanan?></b></p>
		<p><b>Dengan Jumlah Pesanan : <?php echo $jumlahpesanan ?>buah</b></p>
		<p><b>Akan Segera Kami Proses</b></p>
		<br>
		<p>Silahkan Tunggu Pesanan Anda hingga driver kami sampai ke lokasi anda!</p>
		</table>
	</div>
</body>
</html>