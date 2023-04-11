  
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
$no = mysqli_query($koneksi, "select id_transaksi from produk_keluar order by id_transaksi desc");
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
              <h6 class="m-0 font-weight-bold text-primary">Tambah Produk Keluar</h6>
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
							
							<label for="">Permintaan</label>
                            <div class="form-group">
                               <div class="form-line">
                               <select name="permintaan" class="form-control">
                               	<option value="">-- Pilih --</option>
                               	<option value="Marketing">Marketing</option>
                               	<option value="Kedai">Kedai</option>
                               </select> 
							</div>
                            </div>
					
							<label for="">Produk</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="barang" id="cmb_barang" class="form-control" />
								<option value="">-- Pilih Produk  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from produk order by id_produk");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id_produk].$data[jenis_produk]'>$data[id_produk] | $data[jenis_produk]</option>";
								}
								?>
								
								</select>
                                     
									  
							</div>
                            </div>
							
                            <div class="tampung"></div>

							<label for="">Jumlah</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jumlahkeluar" id="jumlahkeluar" onkeyup="sum()" class="form-control" />
							
                                     
									 
							</div>
                            </div>
							
							<label for="total">Total Stok</label>
                            <div class="form-group">
                               <div class="form-line">
                               <input readonly="readonly" name="total" id="total" type="number" class="form-control">
                            

							</div>
                            </div>
						
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
								if (isset($_POST['simpan'])) {
								$id_transaksi= $_POST['id_transaksi'];
								$tanggal= $_POST['tanggal_keluar'];
								$permintaan= $_POST['permintaan'];

								$barang= $_POST['barang'];
								$pecah_barang = explode(".", $barang);
								$id_produk = $pecah_barang[0];
								$jenis_produk = $pecah_barang[1];
								$jumlah= $_POST['jumlahkeluar'];
								
								$satuan= $_POST['satuan'];
								$tujuan= $_POST['tujuan'];
								
								
								$total= $_POST['total'];
								$sisa2 = $total;
								if ($sisa2 < 0) {
									?>
									
										<script type="text/javascript">
										alert("Stok Barang Habis, Transaksi Tidak Dapat Dilakukan");
										window.location.href="?page=barangkeluar&aksi=tambahbarangkeluar";
										</script>
										
											<?php
								}else {
							
								
								$sql = $koneksi->query("insert into produk_keluar (id_transaksi, tanggal, permintaan, id_produk, jenis_produk, jumlah) values('$id_transaksi','$tanggal','$permintaan','$id_produk','$jenis_produk','$jumlah')");
								$sql2 = $koneksi-> query("update produk set jumlah=jumlah-'$jumlah' where id_produk='$id_produk'");
								?>
								


									
									
									<script type="text/javascript">
										alert("Simpan Data Berhasil");
										window.location.href="?page=produkkeluar";
										
										</script>
										<?php
								}
							}
							
							
							?>
								
								
								
								
								
