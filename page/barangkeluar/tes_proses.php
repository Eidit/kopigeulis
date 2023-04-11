<table>
	<tr>
		<th> Jenis</th>
		<th>Arabika</th>
		<th>Robusta</th>
		<th>Jumlah Pemesanan</th>
	</tr>
<?php
$koneksi = new mysqli("localhost","root","","inventori");
	$jenis_produk = $_POST['jenis_produk'];
	$jumlah = $_POST['jumlah'];


if ($jenis_produk == 'PDK-1222007')
	 		{ $a = 300;
	 		  $r = 700;
	 		 }

$kea = (($jumlah * $a) / 1000) ;
$ker = (($jumlah * $r) / 1000) ;


echo "<tr><td>$jenis_produk <td> $kea <td> $ker <td> $jumlah ";

$sql2 =$koneksi-> query("update gudang set jumlah = jumlah - $ker where kode_barang='BBK-1222001' ");
$sql1 =$koneksi-> query("update gudang set jumlah = jumlah - $kea where kode_barang='BBK-1222002' ");
$sql3 =$koneksi-> query("update produk set jumlah = jumlah + $jumlah where id_produk = '$jenis_produk' ");

echo "<tr><td> Arabika $sql1 <br>";
echo "<tr><td> Robusta $sql2 <br>";
echo "<tr><td> Produk $sql3 <br>";