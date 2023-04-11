
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Produk Masuk
              </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
											<th>No</th>
											<th>Tanggal</th>											
											<th>Kode Produk</th>
                      <th>Produk</th>
											<th>Jumlah</th>
                  </tr>
										</thead>
										
               
                  <tbody>
                  <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from produk_masuk ORDER BY id DESC");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                    <tr>
                      <td><?php echo $no++; ?></td>
											<td><?php echo $data['tanggal'] ?></td>
											<td><?php echo $data['id_produk'] ?></td>
                      <td><?php echo $data['jenis_produk'] ?></td>
											<td><?php echo $data['jumlah'] ?> Kg</td>
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












