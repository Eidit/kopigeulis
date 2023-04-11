 <?php
	
	$koneksi = new mysqli("localhost","root","","inventori");

	
	
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Stok_Produk(".date('d-m-Y').").xls");

?>	

<h2>Laporan Stok Produk</h2>

<table border="1">
	  <tr>
			<th>No</th>
			<th>Kode Produk</th>											
			<th>Jenis Produk</th>
			<th>Jumlah</th>
			<th>Satuan</th>
			<th>Nama Palet</th>
    	<th>Status</th>
		</tr>
	
 <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from produk ORDER BY id_produk ASC");
									while ($data = $sql->fetch_assoc()) {
										if ($data['jumlah']<=$data['safety']) {
                           					 $status='<span class="badge badge-danger">Dibawah batas aman</span>';
                          					}elseif($data['jumlah']>=$data['safety']){
                            				$status='<span class="badge badge-primary">Persediaan Aman</span>';
                          					}elseif($data['jumlah']<=$data['safety']){
                            				$status='<span class="badge badge-danger">Segera Produksi</span>';
                          					}else{
                            				$status='';
                          					}
									?>
										<tr>
                    	<td><?php echo $no++; ?></td>
											<td><?php echo $data['id_produk'] ?></td>
											<td><?php echo $data['jenis_produk'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											<td><?php echo $data['nama_palet'] ?></td>
											<td><?php echo $status ?></td>

                    </tr>
									<?php }?>

                                </table>