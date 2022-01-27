<?php 
// menangkap data nama dengan method post
$nama = $_POST['nama'];
// menangkap data usia dengan method post
$usia = $_POST['usia'];
// menangkap data tlpn dengan method post
$tlpn = $_POST['tlpn'];
 
// menampilkan data nama
echo "Nama anda adalah " . $nama;
echo "<br/>";
// menampilkan data usia
echo "Usia anda adalah " . $usia;
echo "<br/>";
// menampilkan data tlpn
echo "No tlpn anda adalah " . $tlpn;
echo "<br/>";
?>