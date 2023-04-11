

                  <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Stok Bahan Baku</h6>
            </div>
            <div class="card-body">
           <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
											<th>No</th>
											<th>Kode Kopi</th>											
											<th>Jenis Kopi</th>
											<th>Jumlah Kopi</th>
											<th>Satuan</th>                  
                    </tr>
										</thead>
										
               
                  <tbody>
                   <?php 
									$no = 1;
									$sql = $koneksi->query("select * from gudang ORDER BY kode_barang DESC");
									while ($data = $sql->fetch_assoc()) {
										
									?>
										<tr>
                      <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_barang'] ?></td>
											<td><?php echo $data['jenis_barang']?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											
                    </tr>
									<?php }?>

							</tbody>
            </table>
            </div>
                  </tbody>
                
              
            </div>
          </div>

        </div>
   <script>
 function sum() {
	 var stok = document.getElementById('stok').value;
	 var jumlahkeluar = document.getElementById('jumlahkeluar').value;
	 var result = parseInt(stok) - parseInt(jumlahkeluar);
	 if (!isNaN(result)) {
		 document.getElementById('total').value = result;
	 }
 }
 </script>
  
  <?php 
  
error_reporting(0);
$koneksi = new mysqli("localhost","root","","inventori");
$no = mysqli_query($koneksi, "select id_transaksi from bahan_keluar order by id_transaksi desc");
$idtran = mysqli_fetch_array($no);
$kode = $idtran['id_transaksi'];


$urut = substr($kode, 8, 3);
$tambah = (int) $urut + 1;
$bulan = date("m");
$tahun = date("y");

if(strlen($tambah) == 1){
	$format = "TRK-".$bulan.$tahun."00".$tambah;
} else if(strlen($tambah) == 2){
	$format = "TRK-".$bulan.$tahun."0".$tambah;
	
} else{
	$format = "TRK-".$bulan.$tahun.$tambah;

}

  

$tanggal_keluar = date("Y-m-d");


?>
  
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Bahan Baku Keluar</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Id Transaksi</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="id_transaksi" class="form-control" id="id_transaksi" value="<?php echo $format; ?>" readonly />  
							</div>
                            </div>
							
							<label for="">Tanggal Keluar</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="date" name="tanggal_keluar" class="form-control" id="tanggal_kelauar" value="<?php echo $tanggal_keluar; ?>" />
							</div>
                            </div>
							
					
							<label for="">Permintaan Produksi Produk</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="produk" class="form-control" />
								<option value="">-- Pilih Jenis Produk  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from permintaan_proses order by id_produk");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id_produk].$data[jenis_produk]'>$data[jenis_produk] | 
									Permintaan $data[jumlah] Kg</option>";
								}
								?>
								
								</select>
                                     
									 
							</div>
                            </div>
							<div class="tampung"></div>
					
							<label for="">Jumlah</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jumlah" class="form-control" >
							
                            </div>
                            </div>
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
								if (isset($_POST['simpan'])) {
								$id_transaksi= $_POST['id_transaksi'];
								$tanggal= $_POST['tanggal_keluar'];

								$produk= $_POST['produk'];
								$pecah_produk = explode(".", $produk);
								$id_produk = $pecah_produk[0];
								$jenis_produk = $pecah_produk[1];

								$jumlah= $_POST['jumlah'];
								

								if ($id_produk == 'PDK-1222002')
	 								{ $a = 1000;
	 		  						  $r = 0;
	 		 						}
	 		 					if ($id_produk == 'PDK-1222003')
	 								{ $a = 1000;
	 		  						  $r = 0;
	 		 						}
	 		 					if ($id_produk == 'PDK-1222004')
	 								{ $a = 1000;
	 		  						  $r = 0;
	 		 						}
	 		 					if ($id_produk == 'PDK-1222005')
	 								{ $a = 1000;
	 		  						  $r = 0;
	 		 						}		
								if ($id_produk == 'PDK-1222006')
	 								{ $a = 0;
	 		  						  $r = 1000;
	 		 						}
	 		 					if ($id_produk == 'PDK-1222007')
	 								{ $a = 400;
	 		  						  $r = 600;
	 		 						}	
	 		 					if ($id_produk == 'PDK-1222008')
	 								{ $a = 300;
	 		  						  $r = 700;
	 		 						}
	 		 					if ($id_produk == 'PDK-1222009')
	 								{ $a = 400;
	 		  						  $r = 600;
	 		 						}

	 		 					$jumlahkeluar = ($jumlah * 1000 / 1000);
								$kea = (($jumlah * $a) / 1000) ;
								$ker = (($jumlah * $r) / 1000) ;

								if ($sisa2 < 0) {
									?>
									
										<script type="text/javascript">
										alert("Stok Barang Habis, Transaksi Tidak Dapat Dilakukan");
										window.location.href="?page=barangkeluar&aksi=tambahbarangkeluar";
										</script>
										
											<?php
								}else {
							
								
								$sql = $koneksi->query("insert into bahan_keluar (id_transaksi, tanggal, id_produk, jenis_produk, jumlah, arabika, robusta) values('$id_transaksi','$tanggal','$id_produk','$jenis_produk','$jumlahkeluar','$kea','$ker')");

								$masuk = $koneksi->query("insert into produk_masuk (tanggal, id_produk, jenis_produk, jumlah) values('$tanggal','$id_produk','$jenis_produk','$jumlahkeluar')");

								$sql2 =$koneksi-> query("update gudang set jumlah = jumlah - $ker where kode_barang='BBK-1222001' ");
								$sql1 =$koneksi-> query("update gudang set jumlah = jumlah - $kea where kode_barang='BBK-1222002' ");
								$sql3 =$koneksi-> query("update produk set jumlah = jumlah + $jumlah where id_produk = '$id_produk' ");
								?>
								


									
									
									<script type="text/javascript">
										alert("Simpan Data Berhasil");
										window.location.href="?page=barangkeluar";
										
										</script>
										<?php
								}
							}
							
							
							?>
								
								
								
								
								
