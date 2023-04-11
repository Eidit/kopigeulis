<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Permintaan Produksi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr  align="center">
											<th>No</th>
											<th>Tanggal</th>
                      <th>Kode Produk</th>	
											<th>Jenis Produk</th>
                      <th>Jumlah</th>
                      <?php 
                      if ($_SESSION['petugas']) {
                      $user = $_SESSION['petugas'];
                      ?>
                      <th>Permintaan Bahan Baku</th>
                    <?php } ?>
                    </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from permintaan order by id asc");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                    <tr>
                      <td align="center"><?php echo $no++; ?></td>
											<td align="center"><?php echo $data['tanggal'] ?></td>
                      <td align="center"><?php echo $data['id_produk'] ?></td>
                      <td align="center"><?php echo $data['jenis_produk'] ?></td>
                      <td align="center"><?php echo $data['jumlah'] ?> Kg</td>
                      <?php 
                      if ($_SESSION['petugas']) {
                      $user = $_SESSION['petugas'];
                      ?>
                      <td align="center"><a href="?page=permintaan&aksi=proses&id=<?php echo $data['id'] ?>" class="btn btn-success" >Proses</a>



                      </td>
                    <?php } ?>
                    </tr>
									<?php }?>

										   </tbody>
                                </table>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>