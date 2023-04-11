<?php
	$sql1 =$koneksi->query("select * from users where id='$user'");
  $data1 = $sql1->fetch_assoc();
?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Bahan Baku Keluar</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>Id Transaksi</th>
											<th>Tanggal Keluar</th>
											<th>Kode Produk</th>
											<th>Produk</th>
											<th>Jumlah Produksi</th>
											<th>Arabika</th>
											<th>Robusta</th>
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from bahan_keluar ORDER BY id DESC");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['id_transaksi'] ?></td>
											<td><?php echo $data['tanggal'] ?></td>
											<td><?php echo $data['id_produk'] ?></td>
											<td><?php echo $data['jenis_produk'] ?></td>
											<td><?php echo $data['jumlah'] ?> Kg</td>
											<td><?php echo $data['arabika'] ?> Kg</td>
											<td><?php echo $data['robusta'] ?> Kg</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
              <?php 
              if ($_SESSION['superadmin']) {
	   					$user = $_SESSION['superadmin'];
    					?>
								<a href="?page=barangkeluar&aksi=tambahbarangkeluar" class="btn btn-primary" >Tambah</a>
							<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












