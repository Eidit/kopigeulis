



<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
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
											<th>Satuan</th>
											<th>Nama Palet</th>
                      <th>Status</th>
										</tr>
										</thead>
										
               
                  <tbody>
                  <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from produk ORDER BY id_produk ASC");
									while ($data = $sql->fetch_assoc()) {
										if ($data['jumlah']<=$data['safety']) {
                           					 $status='<span class="badge badge-danger">Dibawah batas aman</span>';
                          					}elseif($data['jumlah']>=$data['safety']){
                            				$status='<span class="badge badge-primary">Persediaan Aman</span>';
                          					}elseif($data['jumlah']<=$data['safety']){
                            				$status='<span class="badge badge-danger">Segera Produksi</span>';
                          					}else{
                            				$status='';
                          					}
									?>
										<tr>
                    	<td><?php echo $no++; ?></td>
											<td><?php echo $data['id_produk'] ?></td>
											<td><?php echo $data['jenis_produk'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											<td><?php echo $data['nama_palet'] ?></td>
											<td><?php echo $status ?></td>

                    </tr>
								

									<?php }?>

										   </tbody>
                                </table>
								<a href="page/laporan/export_laporan_produk_excel.php"  class="btn btn-primary" style="margin-top:8 px"><i class="fa fa-print"></i>ExportToExcel</a>
								
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












