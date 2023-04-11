<html>
<form action="tes_proses.php" method=post>
	<?php

$koneksi = new mysqli("localhost","root","","inventori");
$sql2 = $koneksi->query("select * from pengeluran");
 $tampil = $sql2->fetch_assoc();
	?>
	<table>
	 <tr><td>Jenis Produk<td>
	 	<select name="jenis_produk" id="cmb_produk" class="form-control" />
								<option value="">-- Pilih Jenis Kopi  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from produk order by id_produk");
								while ($data=$sql->fetch_assoc()) {
										echo "<option value='$data[id_produk].$data[jenis_produk]'>$data[id_produk] | $data[jenis_produk]</option>"
								}
								?>
								
								</select>
<td>Jumlah<td><input name=jumlah>
	
	
</form>
<input type=submit value=Proses>
</html>