<table>
	<tr>
		<th> Jenis</th>
		<th>Arabika</th>
		<th>Robusta</th>
		<th>Jumlah Pemesanan</th>
	</tr>
<?php
	$jenis_produk = $_POST['jenis_produk'];
	$jumlah = $_POST['jumlah'];

	 if ($jenis_produk == '6')
	 		{ $a = 400;
	 		  $r = 600;
	 		 }

if ($jenis_produk == '7')
	 		{ $a = 700;
	 		  $r = 300;
	 		 }



echo "<tr><td>$jenis_produk <td> $a <td> $r <td> $jumlah ";

$kea = (($jumlah * $a) / 1000) ;
$ker = (($jumlah * $r) / 1000) ;


echo "<tr><td>$jenis_produk <td> $kea <td> $ker <td> $jumlah ";

$sql1 = "update gudang set jumlah = jumlah - $kea where kode_barang='BBK-1222002' ";
$sql2 = "update gudang set jumlah = jumlah - $ker where kode_barang='BBK-1222001' ";
$sql3 = "update produk set jumlah = jumlah + $jumlah where id_produk = '$jenis_produk' ";

echo "<tr><td> Arabika $sql1 <br>";
echo "<tr><td> Robusta $sql2 <br>";
echo "<tr><td> Produk $sql3 <br>";