  
   <script>
 function sum() {
	 var stok = document.getElementById('stok').value;
	 var jumlahmasuk = document.getElementById('jumlahmasuk').value;
	 var result = parseInt(stok) + parseInt(jumlahmasuk);
	 if (!isNaN(result)) {
		 document.getElementById('jumlah').value = result;
	 }
 }
 </script>
  
  <?php 
$koneksi = new mysqli("localhost","root","","inventori");
$no = mysqli_query($koneksi, "select id_transaksi from barang_masuk order by id_transaksi desc");
$idtran = mysqli_fetch_array($no);
$kode = $idtran['id_transaksi'];


$urut = substr($kode, 8, 3);
$tambah = (int) $urut + 1;
$bulan = date("m");
$tahun = date("y");

if(strlen($tambah) == 1){
	$format = "TRM-".$bulan.$tahun."00".$tambah;
} else if(strlen($tambah) == 2){
	$format = "TRM-".$bulan.$tahun."0".$tambah;
	
} else{
	$format = "TRM-".$bulan.$tahun.$tambah;

}

  
  
$tanggal_masuk = date("Y-m-d");


?>
  
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Bahan Baku Masuk</h6>
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
							
						
							
							<label for="">Tanggal Masuk</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" value="<?php echo $tanggal_masuk; ?>" />
							</div>
                            </div>
							
					
							<label for="">Jenis Kopi</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="barang" id="cmb_barang" class="form-control" />
								<option value="">-- Pilih Jenis Kopi  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from gudang order by kode_barang");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[kode_barang].$data[jenis_barang]'>$data[kode_barang] | $data[jenis_barang]</option>";
								}
								?>
								
								</select>
                                     
									 
							</div>
                            </div>
							
					
							<label for="">Jumlah</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jumlahmasuk" id="jumlahmasuk" onkeyup="sum()" class="form-control" />
                                     
									 
							</div>
                            </div>
							
							<div class="tampung1"></div>
							
						
							
								<label for="">Supplier</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="pengirim" class="form-control" />
								<option value="">-- Pilih Supplier  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from tb_supplier order by nama_supplier");
								while ($data=$sql->fetch_assoc()) {
								echo "<option value='$data[nama_supplier]'>$data[nama_supplier]</option>";
								}
								?>
								
								</select>
                                     
									 
							</div>
                            </div>

                            <label for="">Palet Penyimpanan</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="palet" class="form-control" />
								<option value="">-- Pilih Palet  --</option>
								<?php
								
								$sql = $koneksi -> query("select * from palet order by nama_palet");
								while ($data=$sql->fetch_assoc()) {
								echo "<option value='$data[nama_palet]'>$data[nama_palet]</option>";
								}
								?>
								
								</select>
                                     
									 
							</div>
                            </div>
						
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								$id_transaksi= $_POST['id_transaksi'];
								$tanggal= $_POST['tanggal_masuk'];

								$barang= $_POST['barang'];
								$pecah_barang = explode(".", $barang);
								$kode_barang = $pecah_barang[0];
								$jenis_barang = $pecah_barang[1];
								
								
								$jumlah= $_POST['jumlahmasuk'];

								
								$pengirim= $_POST['pengirim'];
								$pecah_nama = explode(".", $nama_supplier);
								$nama_supplier = $pecah_nama[0];
								
								$satuan = $_POST['satuan'];

								$palet = $_POST['palet'];
								
								
								
							
								
								$sql = $koneksi->query("insert into barang_masuk (id_transaksi, tanggal, kode_barang, jenis_barang, jumlah, satuan, pengirim, nama_palet) values('$id_transaksi','$tanggal','$kode_barang','$jenis_barang','$jumlah','$satuan','$pengirim','$palet')");
								
								


									
									if ($sql) {
									?>
									<script type="text/javascript">
										alert("Simpan Data Berhasil");
										window.location.href="?page=barangmasuk";
										
										</script>
										<?php
								}
							}
							
							
							?>
