<?php
	$sql1 =$koneksi->query("select * from users where id='$user'");
  $data1 = $sql1->fetch_assoc();
?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Stok Produk / 
              	<?php 
									date_default_timezone_set('Asia/Jakarta'); // Zona Waktu indonesia
									echo date('Y-m-d'); // menampilkan jam sekarang
								?>
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
											<th>No</th>
											<th>Kode Produk</th>											
											<th>Jenis Produk</th>
											<th>Jumlah</th>
                      <th>Safety Stock</th>
											<th>Satuan</th>
											<th>Nama Palet</th>
                      <?php 
                      if ($_SESSION['admin'].['petugas']) {
                      $user = $_SESSION['admin'].['petugas'];
                      ?>
                      <th>Status</th>
                      <?php } ?>
                      <?php 
                      if ($_SESSION['admin']) {
                      $user = $_SESSION['admin'];
                      ?>
                      <th>Status</th>
                      <?php } ?>
                    </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from produk ORDER BY id_produk ASC");
									while ($data = $sql->fetch_assoc()) {
										if ($data['jumlah']<$data['safety']) {
                                    $status='<span class="badge badge-danger">Dibawah batas aman</span>';
                          					}elseif($data['jumlah']>=$data['safety']){
                            				$status='<span class="badge badge-primary">Persediaan Aman</span>';
                          					}elseif($data['jumlah']<=$data['safety']){
                            				$status='<span class="badge badge-danger">Segera Produksi</span>';
                          					}else{
                            				$status='';
                          					}
                    if ($data['jumlah']<$data['safety']) {
                        $status1='<a href="?page=produk&aksi=ajukan&id=' . $data['id'] .'" class="btn btn-success">Ajukan</a>';
                    }elseif($data['jumlah']>=$data['safety']){
                      $status1 = '<span> </span>';
                    }
									?>
									
                    <tr>
                    	<td><?php echo $no++; ?></td>
											<td><?php echo $data['id_produk'] ?></td>
											<td><?php echo $data['jenis_produk'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
                      <td><?php echo $data['safety'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											<td><?php echo $data['nama_palet'] ?></td>
                      <?php 
                      if ($_SESSION['admin'].['petugas']) {
                      $user = $_SESSION['admin'].['petugas'];
                      ?>
											<td><?php echo $status ?></td>
                    <?php } ?>
                    <?php 
                      if ($_SESSION['admin']) {
                      $user = $_SESSION['admin'];
                      ?>
                      <td><?php echo $status1 ?></td>
                    <?php }?>
                    </tr>
									<?php }?>

										   </tbody>
                                </table>
                <?php 
              if ($_SESSION['superadmin']) {
	   					$user = $_SESSION['superadmin'];
    					?>
								<a href="?page=produk&aksi=tambahproduk" class="btn btn-primary" >Tambah</a>
							<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












