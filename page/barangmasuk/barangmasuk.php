<?php
	$sql1 =$koneksi->query("select * from users where id='$user'");
  $data1 = $sql1->fetch_assoc();
?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Bahan Baku Masuk</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
											<th>No</th>
											<th>Id Transaksi</th>
											<th>Tanggal Masuk</th>
											<th>Kode Kopi</th>
											<th>Jenis Kopi</th>
											<th>Pengirim</th>
											<th>Jumlah Masuk</th>
											<th>Satuan Barang</th>
											<th>Palet Penyimpanan</th>
                    </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from barang_masuk ORDER BY id_transaksi DESC");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                    <tr>
                      <td><?php echo $no++; ?></td>
											<td><?php echo $data['id_transaksi'] ?></td>
											<td><?php echo $data['tanggal'] ?></td>
											<td><?php echo $data['kode_barang'] ?></td>
											<td><?php echo $data['jenis_barang'] ?></td>
											<td><?php echo $data['pengirim'] ?></td>                       
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											<td><?php echo $data['nama_palet'] ?></td>
											
                    </tr>
									<?php }?>

										   </tbody>
                                </table>
                <?php 
              if ($_SESSION['superadmin']) {
	   					$user = $_SESSION['superadmin'];
    					?>
								<a href="?page=barangmasuk&aksi=tambahbarangmasuk" class="btn btn-primary" >Tambah</a>
								<?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>