
<?php
if (isset($_POST['submit']))
{?>

 <?php



	$koneksi = new mysqli("localhost","root","","inventori");

	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Produk_Masuk (".date('d-m-Y').").xls");
	
	$bln = $_POST['bln'] ;
	$thn = $_POST['thn'] ;

?>	

<body>
<center>
<h2>Laporan Produk Masuk Bulan <?php echo $bln;?>, Tahun <?php echo $thn;?></h2>
</center>
<table border="1">
<tr>
					<th>No</th>
					<th>Tanggal</th>											
					<th>Kode Produk</th>
					<th>Jumlah</th>
                </tr>

                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from produk_masuk where MONTH(tanggal) = '$bln' and YEAR(tanggal) = '$thn'");
									while ($data = $sql->fetch_assoc()) {
										
									?>
					<tr>
                      	<td><?php echo $no++; ?></td>
						<td><?php echo $data['tanggal'] ?></td>
						<td><?php echo $data['jenis_produk'] ?></td>
						<td><?php echo $data['jumlah'] ?> Kg</td>
                    </tr>
									<?php }?>
					</table>	
					</body>
                                
	<?php 
	}
	?>
	
	<?php

	$koneksi = new mysqli("localhost","root","","inventori");
	

	$bln = $_POST['bln'] ;
	$thn = $_POST['thn'] ;
	?>
	
	<?php
	if ($bln == 'all') {
		?>
	<div class="table-responsive">
							
<table  class="display table table-bordered" id="transaksi">
								
<thead>
<tr>
					<th>No</th>
					<th>Tanggal</th>											
					<th>Kode Produk</th>
					<th>Jumlah</th>
                </tr>
</thead>

	<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from produk_masuk where YEAR(tanggal) = '$thn'");
		while ($data = $sql->fetch_assoc()) {
									
		?>
					<tr>
                      	<td><?php echo $no++; ?></td>
						<td><?php echo $data['tanggal'] ?></td>
						<td><?php echo $data['jenis_produk'] ?></td>
						<td><?php echo $data['jumlah'] ?> Kg</td>
                    </tr>
						<?php 
						}
						?>

					</tbody>
                    </table>
					</div>
					
					
					<?php
					}
					else{ ?>
						<div class="table-responsive">
							
<table  class="display table table-bordered" id="transaksi">
								
<thead>
<tr>
					<th>No</th>
					<th>Tanggal</th>											
					<th>Kode Produk</th>
					<th>Jumlah</th>
                </tr>
</thead>
		<tbody>
									
		
		<?php
		$no = 1;
		$sql = $koneksi->query("select * from produk_masuk where MONTH(tanggal) = '$bln' and YEAR(tanggal) = '$thn'");
			while ($data = $sql->fetch_assoc()) {
									
		?>
	
<tr>
            <tr>
                      	<td><?php echo $no++; ?></td>
						<td><?php echo $data['tanggal'] ?></td>
						<td><?php echo $data['jenis_produk'] ?></td>
						<td><?php echo $data['jumlah'] ?> Kg</td>
                    </tr>
						<?php 
		}
		?>
    </tbody>
	</table>
</div>
	
	<?php

}

?>