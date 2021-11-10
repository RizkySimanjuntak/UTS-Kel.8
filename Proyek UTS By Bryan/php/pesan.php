<html>
<head>
    <title>UTS Kel.8</title>
    <link rel="stylesheet" href="css/style.css">
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
            <form action="php/proses.php" method="POST">
                <table>
                    <tr>
                        <td>Nama Pemesan </td>
                        <td>:</td>
                        <td><input type="text" placeholder="Isi nama anda" name="nama"></td> 
                    </tr>
                    <tr>
                        <td>Lokasi </td>
                        <td>:</td>
                        <td><textarea name="lokasi" id="" cols="27" rows="6"></textarea name="lokasi"></td>
                    </tr>
                    <tr>
                        <td>No. HP </td>
                        <td>:</td>
                        <td><input type="text" placeholder="Isi nomor HP anda" name="nomor"></td>
                    </tr>>
                    <tr>
                        <td>Pesanan </td>
                        <td>:</td>
                        <td><select name="" id="" name="pesanan">
                            <option value="">- Pilih -</option>
                            <option value="">Cireng</option>
                            <option value="">Batagor</option>
                            <option value="">Seblak</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Pesanan </td>
                        <td>:</td>
                        <td> <input type="number" name="jumlah">
                        </td>
                    </tr>
                </table>
                </form>
                <div class="submit">
                    <input type="submit" name="proses">
                </div>
                
        </div>
        <div class="help">Need Help?</div>
    </div>
</body>
</html>