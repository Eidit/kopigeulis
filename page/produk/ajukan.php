  <?php
        $id = $_GET['id'];
	$sql = $koneksi->query("select * from produk where id = '$id'");
 	$data = $sql->fetch_assoc();
 
  	$tanggal = date("Y-m-d");
  ?>
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Pengajuan Produksi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">
							
							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Tanggal Pengajuan</label>
                            <div class="form-group">
                               <div class="form-line">
                                 <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo $tanggal; ?>" />
							</div>
                            </div>

                            <label>Kode Produk</label>
                            <div class="form-group">
                            	<div class="form-line">
                            		<input type="text" name="id_produk" value="<?php echo $data['id_produk']; ?>" class="form-control" readonly/>	
                            	</div>
                            </div>

                            <label>Jenis Produk</label>
                            <div class="form-group">
                            	<div class="form-line">
                            		<input type="text" name="jenis_produk" value="<?php echo $data['jenis_produk']; ?>" class="form-control" readonly/>	
                            	</div>
                            </div>

							<label for="">Jumlah Pengajuan Produksi</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="number" name="jumlah" class="form-control" />	 
							</div>
                            </div>
					
							
						
								<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
						
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								$tanggal= $_POST['tanggal'];
								$id_produk= $_POST['id_produk'];
								$jenis_produk= $_POST['jenis_produk'];
								$jumlah= $_POST['jumlah'];
								
								$sql = $koneksi->query("insert into permintaan (tanggal, id_produk, jenis_produk, jumlah) values('$tanggal','$id_produk','$jenis_produk','$jumlah')");
								
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
										
										
										
								
								
								
								
								
