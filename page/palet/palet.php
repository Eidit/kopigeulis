




 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Palet Penyimpanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
											<th>No</th>
											<th>Palet</th>
                  </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from palet");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                    <tr>
                      <td><?php echo $no++; ?></td>
										  <td><?php echo $data['nama_palet'] ?></td>
                    </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=palet&aksi=tambahpalet" class="btn btn-primary" >Tambah</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












