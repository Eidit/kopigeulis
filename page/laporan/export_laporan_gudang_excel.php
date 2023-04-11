 <?php
	
	$koneksi = new mysqli("localhost","root","","inventori");

	
	
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Stok_Bahan Baku(".date('d-m-Y').").xls");

?>	

<h2>Laporan Stok Bahan Baku</h2>

<table border="1">
	  <tr>
		<th>No</th>
		<th>Kode Barang</th>											
		<th>Jenis Barang</th>
		<th>Jumlah Barang</th>
		<th>Satuan</th>
		<th>Nama Palet</th>
		</tr>
	
 <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from gudang");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_barang'] ?></td>
											<td><?php echo $data['jenis_barang'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											<td><?php echo $data['nama_palet'] ?></td>
								

								

										
                                        </tr>
									<?php }?>

                                </table>