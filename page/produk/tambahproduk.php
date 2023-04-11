<?php 
error_reporting(0);
$koneksi = new mysqli("localhost","root","","inventori");
$no = mysqli_query($koneksi, "select id_produk from produk order by id_produk desc");
$kdbarang = mysqli_fetch_array($no);
$kode = $kdbarang['id_produk'];


$urut = substr($kode, 8, 3);
$tambah = (int) $urut + 1;
$bulan = date("m");
$tahun = date("y");

if(strlen($tambah) == 1){
	$format = "PDK-".$bulan.$tahun."00".$tambah;
} else if(strlen($tambah) == 2){
	$format = "PDK-".$bulan.$tahun."0".$tambah;
	
} else{
	$format = "PDK-".$bulan.$tahun.$tambah;

}



$jumlah = 0;

?>
							




 <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tambah Produk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Kopi</label>
                            <div class="form-group">
                               <div class="form-line">
                                  <input type="text" name="id_produk" class="form-control" id="id_produk" value="<?php echo $format; ?>" readonly />	 
							</div>
                            </div>
							
                            </div>
							
						<label for="">Jenis Produk</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="jenis_produk" class="form-control">
								<option value="">-- Pilih Jenis Produk  --</option>
								<option value="Kopi Arabika Wine">Kopi Arabika Wine</option>
								<option value="Kopi Arabika Natural">Kopi Arabika Natural</option>
								<option value="Kopi Arabika Honey">Kopi Arabika Honey</option>
								<option value="Kopi Arabika Fullwash">Kopi Arabika Fullwash</option>
								<option value="Kopi Robusta">Kopi Robusta</option>
								<option value="Kopi Lanang">Kopi Lanang</option>
								<option value="Kopi Geulis Blend">Kopi Geulis Blend</option>
								<option value="Kopi Geulis Arum Rempah">Kopi Geulis Arum Rempah</option>
								<option value="Kopi Geulis Gula Aren">Kopi Geulis Gula Aren</option>
								</select>
                                     
									 
							</div>
                            </div>
							
							
                            <label for="">Jumlah</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?php echo $jumlah; ?>" readonly />
                                     
									 
							</div>
                            </div>
                                     
						
							
						
                          
                              
				
							<label for="">Satuan Barang</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="satuan" class="form-control" />
								<option value="">-- Pilih Satuan Barang --</option>
								<?php
								
								$sql = $koneksi -> query("select * from satuan order by id");
								while ($data=$sql->fetch_assoc()) {
									echo "<option value='$data[id].$data[satuan]'>$data[satuan]</option>";
								}
								?>
								</select>
                                     
									 
							</div>
                            </div>
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
		
								$id_produk= $_POST['id_produk'];
								
								
								$jenis_produk= $_POST['jenis_produk'];
							
								$jumlah= $_POST['jumlah'];
						
								$satuan= $_POST['satuan'];
								$pecah_satuan = explode(".", $satuan);
							
								$id = $pecah_satuan[0];
								$satuan = $pecah_satuan[1];
								
								
								
								
								
						
								
								$sql = $koneksi->query("insert into produk (id_produk, jenis_produk, jumlah, satuan ) values('$id_produk','$jenis_produk','$jumlah','$satuan')");
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Disimpan");
										window.location.href="?page=produk";
										</script>
										
										<?php
								}
								}
							
							
							?>
										
										
										
								
								
								
								
								
