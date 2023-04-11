<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Proses Produksi</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
											<th>No</th>
											<th>Id Produksi</th>
											<th>Tanggal Produksi</th>
											<th>Jenis Produksi</th>
											<th>Target Produksi</th>
											<th>Bahan Baku</th>
											<th>Hasil Produksi</th>
											<th>Pengaturan</th>
                    </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from barang_masuk INNER JOIN gudang ON barang_masuk.kode_barang = gudang.kode_barang ORDER BY id_transaksi DESC");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                    <tr>
                      <td><?php echo $no++; ?></td>
											<td><?php echo $data[''] ?></td>
											<td><?php echo $data[''] ?></td>
											<td><?php echo $data[''] ?></td>
											<td><?php echo $data[''] ?></td>
											<td><?php echo $data[''] ?></td>
											<td><?php echo $data[''] ?></td>
											<td><a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=barangmasuk&aksi=hapusbarangmasuk&id_transaksi=<?php echo $data['id_transaksi'] ?>" class="btn btn-danger" >Hapus</a>
											</td>
                    </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=prosesproduksi&aksi=tambahproduksi" class="btn btn-primary" >Tambah</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












