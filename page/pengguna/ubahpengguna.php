<?php
 $id = $_GET['id'];
 $sql2 = $koneksi->query("select * from users where id = '$id'");
 $tampil = $sql2->fetch_assoc();
 
 $level = $tampil['level'];
 ?>
 
  <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
							
							
							<div class="body">

							<form method="POST" enctype="multipart/form-data">
							
							<label for="">Nama</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="text" name="nama" value="<?php echo $tampil['nama']; ?>" class="form-control" readonly />
	 
							</div>
                            </div>
							
							<label for="">Password Lama</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="password" name="password" value="<?php echo $tampil['password']; ?>" class="form-control" />
                          	 
								</div>
                            </div>
							
							<label for="">Password Baru</label>
                            <div class="form-group">
                               <div class="form-line">
                                <input type="password" name="passwordnew" class="form-control" />
                          	 
								</div>
                            </div>
						
							
							<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							
							</form>
							
							
							
							<?php
							
							if (isset($_POST['simpan'])) {
								
								$passwordnew = $_POST['passwordnew'];
								
								
								
								$sql = $koneksi->query("update users set password='$passwordnew' where id='$id'"); 
								
								if ($sql) {
									?>
									
										<script type="text/javascript">
										alert("Data Berhasil Diubah");
										window.location.href="?page=home3";
										</script>
										
										<?php
								}
							
								
								
							
							}
							?>
										
										
										
								
								
								
								
								
