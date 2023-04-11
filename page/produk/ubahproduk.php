

<?php
 $id_produk = $_GET['id_produk'];
 $sql2 = $koneksi->query("select * from produk where id_produk = '$id_produk'");
 $tampil = $sql2->fetch_assoc();
 
 $level = $tampil['level'];

 
 
 
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ubah Produk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Kode Produk</label>
                            <div class="form-group">
                               <div class="form-line">
                                  <input type="text" name="id_produk" class="form-control" id="id_produk" value="<?php echo $tampil['id_produk']; ?>" readonly />	 
							</div>
                            </div>
							
						<label for="">Jenis Produk</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="jenis_produk" class="form-control">
                        <option> <?php echo $tampil['jenis_produk'];?></option>
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
							
							
                          
                                     
			
							<label for="">Satuan</label>
                            <div class="form-group">
                               <div class="form-line">
                                <select name="satuan" value="<?php echo $tampil['satuan'];?>" class="form-control" />
								
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
								
							
								$satuan= $_POST['satuan'];
								$pecah_satuan = explode(".", $satuan);
							
								$id = $pecah_satuan[0];
								$satuan = $pecah_satuan[1];
								

								$sql = $koneksi->query("update produk set id_produk='$id_produk', jenis_produk='$jenis_produk', satuan='$satuan' where id_produk='$id_produk'"); 
								
								if ($sql2) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=produk";
										</script>
										
										<?php
								}
							}
							?>
										
										
										
										
								
								
								
								
								
