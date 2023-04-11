<?php
	$sql1 =$koneksi->query("select * from users where id='$user'");
  $data1 = $sql1->fetch_assoc();
?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Stok Bahan Baku / 
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
											<th>Kode Kopi</th>											
											<th>Jenis Kopi</th>
											<th>Jumlah Kopi</th>
											<th>Satuan</th>
											<th>Nama Palet</th>
											<th>Masuk</th>
											<th>Keluar</th>                    
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
											<td><?php echo $data['nama_palet'] ?></td>
											<td>
											<a href="?page=barangmasuk" class="btn btn-success" >Detail</a></td>
											<td>
											<a href="?page=barangkeluar" class="btn btn-danger" >Detail</a>
											</td>
                    </tr>
									<?php }?>

							</tbody>
            </table>
              <?php 
              if ($_SESSION['superadmin']) {
	   					$user = $_SESSION['superadmin'];
    					?>
								<a href="?page=gudang&aksi=tambahgudang" class="btn btn-primary" >Tambah</a>
              <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












