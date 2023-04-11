
<?php
mysqli_report (MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	session_start();
	
$koneksi = new mysqli("localhost","root","","inventori");
	
if(empty($_SESSION['superadmin'])){
    
    header("location:login.php");
  }
	?>	



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/kopigeulis.ico">
  <title>Gudang Kopi Geulis</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  
  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index3.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-2">GUDANG KOPI GEULIS</div>
      </a>

	  <!-- Divider -->
      <hr class="sidebar-divider my-0">
	  

 <?php
   if ($_SESSION['superadmin']) {
	   $user = $_SESSION['superadmin'];
   }
   $sql =$koneksi->query("select * from users where id='$user'");
   $data = $sql->fetch_assoc();
   ?>
  <!--sidebar start-->
  <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="?page=home3">
          <i class="fas fa-fw fa-home"></i>
          <span>Menu Utama</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Pilih Menu
      </div>
	 
      <!-- Nav Item - Pages Collapse Menu -->
	  
	   <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData" aria-expanded="true" aria-controls="collapseData">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Master</span>
        </a>
        <div id="collapseData" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="?page=gudang">Bahan Baku</a>
          </div>
        </div>
      </li>

      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDataa" aria-expanded="true" aria-controls="collapseDataa">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pengajuan Bahan Baku</span>
        </a>
        <div id="collapseDataa" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="?page=permintaanbb">Pengajuan Bahan Baku</a>
          </div>
        </div>
      </li>

      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData1" aria-expanded="true" aria-controls="collapseData">
          <i class="fas fa-fw fa-folder"></i>
          <span>Transaksi Masuk</span>
        </a>
        <div id="collapseData1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="?page=barangmasuk">Bahan Baku</a>
          </div>
        </div>
      </li>

      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData2" aria-expanded="true" aria-controls="collapseData">
          <i class="fas fa-fw fa-folder"></i>
          <span>Transaksi Keluar</span>
        </a>
        <div id="collapseData2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="?page=barangkeluar">Bahan Baku</a>
          </div>
        </div>
      </li>
	 
	 <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseData3" aria-expanded="true" aria-controls="collapseData">
          <i class="fas fa-fw fa-folder"></i>
          <span>Palet Penyimpanan</span>
        </a>
        <div id="collapseData3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="?page=palet">Palet</a>
          </div>
        </div>
      </li>

	  <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#supplier" aria-expanded="true" aria-controls="supplier">
          <i class="fas fa-fw fa-folder"></i>
          <span>Supplier</span>
        </a>
        <div id="supplier" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
				<a class="collapse-item" href="?page=supplier">Supplier</a>
          </div>
        </div>
      </li>
	      <!-- Heading -->
      <div class="sidebar-heading">
        Laporan
      </div>
	   <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLaporan" aria-expanded="true" aria-controls="collapseLaporan">
          <i class="fas fa-fw fa-folder"></i>
          <span>Laporan</span>
        </a>
        <div id="collapseLaporan" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu Laporan:</h6>
            <a class="collapse-item" href="?page=laporan_bahan">Laporan Bahan Baku</a>
            <a class="collapse-item" href="?page=laporan_bahanmasuk">Laporan Bahan Baku Masuk</a>
            <a class="collapse-item" href="?page=laporan_bahankeluar">Laporan Bahan Baku Keluar</a>
          </div>
        </div>
      </li>
	  
	  
	  
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

		<!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
          	
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
			 <div class="top-menu">
        		<ul class="nav top-menu">
           <li><?php echo  $data['nama'];?> | <a class="btn btn-sm btn-default" href="?page=pengguna&aksi=ubahpengguna&id=<?php echo $data['id']?>">Ganti Password</a> | <a onclick="return confirm('Apakah anda yakin akan logout?')" class="btn btn-sm btn-default" class="logout" href="logout.php"> Logout </a></li>
        </ul>
      </div>
             
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
		
		 <section class="content">
	
	
		      <?php
			   $page = $_GET['page'];
			   $aksi = $_GET['aksi'];

			   if ($page == "ganti") {
				   if ($aksi == "") {
					   include "page/ganti/ganti.php";
				   }
			   }

			   if ($page == "palet") {
				   if ($aksi == "") {
					   include "page/palet/palet.php";
				   }
				   if ($aksi == "tambahpalet") {
					   include "page/palet/tambahpalet.php";
				   }
			   }

			   if ($page == "produkmasuk") {
				   if ($aksi == "") {
					   include "page/produk/produkmasuk.php";
				   }
				   if ($aksi == "tambahpalet") {
					   include "page/palet/tambahpalet.php";
				   }
			   }

			   if ($page == "produkkeluar") {
				   if ($aksi == "") {
					   include "page/produk/produkkeluar.php";
				   }
				   if ($aksi == "tambahprodukkeluar") {
					   include "page/produk/tambahprodukkeluar.php";
				   }
			   }

			   if ($page == "permintaanbb") {
				   if ($aksi == "") {
					   include "page/permintaan_bb/permintaan_bb.php";
				   }
				   if ($aksi == "tambahprodukkeluar") {
					   include "page/produk/tambahprodukkeluar.php";
				   }
			   }
					
			  			   
			   	if ($page == "pengguna") {
				   if ($aksi == "") {
					   include "page/pengguna/pengguna.php";
				   }
				    if ($aksi == "tambahpengguna") {
					   include "page/pengguna/tambahpengguna.php";
				   }
				    if ($aksi == "ubahpengguna") {
					   include "page/pengguna/ubahpengguna.php";
				   }
				   
				    if ($aksi == "hapuspengguna") {
					   include "page/pengguna/hapuspengguna.php";
				   }
			   }
			   
			   
			   if ($page == "supplier") {
				   if ($aksi == "") {
					   include "page/supplier/supplier.php";
				   }
				    if ($aksi == "tambahsupplier") {
					   include "page//supplier/tambahsupplier.php";
				   }
				    if ($aksi == "ubahsupplier") {
					   include "page/supplier/ubahsupplier.php";
				   }
				   
				    if ($aksi == "hapussupplier") {
					   include "page/supplier/hapussupplier.php";
				   }
			   }
			   
			   if ($page == "jenisbahan") {
				   if ($aksi == "") {
					   include "page/jenisbahan/jenisbahan.php";
				   }
				    if ($aksi == "tambahjenis") {
					   include "page//jenisbahan/tambahjenis.php";
				   }
				    if ($aksi == "ubahjenis") {
					   include "page/jenisbahan/ubahjenis.php";
				   }
				   
				    if ($aksi == "hapusjenis") {
					   include "page/jenisbahan/hapusjenis.php";
				   }
			   } 

			   if ($page == "jenisbarang") {
				   if ($aksi == "") {
					   include "page/jenisbarang/jenisbarang.php";
				   }
				    if ($aksi == "tambahjenis") {
					   include "page//jenisbarang/tambahjenis.php";
				   }
				    if ($aksi == "ubahsupplier") {
					   include "page/supplier/ubahsupplier.php";
				   }
				   
				    if ($aksi == "hapussupplier") {
					   include "page/supplier/hapussupplier.php";
				   }
			   }
			   
			     if ($page == "satuanbarang") {
				   if ($aksi == "") {
					   include "page/satuanbarang/satuan.php";
				   }
				    if ($aksi == "tambahsatuan") {
					   include "page//satuanbarang/tambahsatuan.php";
				   }
				    if ($aksi == "ubahsupplier") {
					   include "page/supplier/ubahsupplier.php";
				   }
				   
				    if ($aksi == "hapussupplier") {
					   include "page/supplier/hapussupplier.php";
				   }
			   }
	
				   if ($page == "barangmasuk") {
				   if ($aksi == "") {
					   include "page/barangmasuk/barangmasuk.php";
				   }
				    if ($aksi == "tambahbarangmasuk") {
					   include "page/barangmasuk/tambahbarangmasuk.php";
				   }
				    if ($aksi == "ubahbarangmasuk") {
					   include "page/barangmasuk/ubahbarangmasuk.php";
				   }
				   
				    if ($aksi == "hapusbarangmasuk") {
					   include "page/barangmasuk/hapusbarangmasuk.php";
				   }
			   }
				
				if ($page == "produk") {
				   if ($aksi == "") {
					   include "page/produk/produk.php";
				   }
				    if ($aksi == "tambahproduk") {
					   include "page/produk/tambahproduk.php";
				   }
				    if ($aksi == "ubahproduk") {
					   include "page/produk/ubahproduk.php";
				   }
				   
				    if ($aksi == "hapusproduk") {
					   include "page/produk/hapusproduk.php";
				   }
				}
	
				if ($page == "gudang") {
				   if ($aksi == "") {
					   include "page/gudang/gudang.php";
				   }
				    if ($aksi == "tambahgudang") {
					   include "page/gudang/tambahgudang.php";
				   }
				    if ($aksi == "ubahgudang") {
					   include "page/gudang/ubahgudang.php";
				   }
				   
				    if ($aksi == "hapusgudang") {
					   include "page/gudang/hapusgudang.php";
				   }
				}
				
				
				   if ($page == "barangkeluar") {
				   if ($aksi == "") {
					   include "page/barangkeluar/barangkeluar.php";
				   }
				    if ($aksi == "tambahbarangkeluar") {
					   include "page/barangkeluar/tambahbarangkeluar.php";
				   }
				    if ($aksi == "ubahbarangkeluar") {
					   include "page/barangkeluar/ubahbarangkeluar.php";
				   }
				   
				    if ($aksi == "hapusbarangkeluar") {
					   include "page/barangkeluar/hapusbarangkeluar.php";
				   }
			   }
			
					
				   if ($page == "laporan_bahan") {
				   if ($aksi == "") {
					   include "page/laporan/laporan_gudang.php";
				   }   
			   }
				    if ($page == "laporan_bahanmasuk") {
				   if ($aksi == "") {
					   include "page/laporan/laporan_barangmasuk.php";
				   }
					}
				    if ($page == "laporan_bahankeluar") {
				   if ($aksi == "") {
					   include "page/laporan/laporan_barangkeluar.php";
				   }
					}
				
				if ($page == "laporan_produk") {
				   if ($aksi == "") {
					   include "page/laporan/laporan_produk.php";
				   }   
			   }
			   
			   if ($page == "laporan_produkmasuk") {
				   if ($aksi == "") {
					   include "page/laporan/laporan_produkmasuk.php";
				   }
					}
				    if ($page == "laporan_produkkeluar") {
				   if ($aksi == "") {
					   include "page/laporan/laporan_produkkeluar.php";
				   }
					}
			     
			   if ($page == "") {
				   include "home3.php";
			   }
			   if ($page == "home3") {
				   include "home3.php";
			   }
			   ?>
    

    </section>

 
</div>
      <!-- End of Main Content -->
  
   <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            
            </span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  </div>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->

 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
  
    <!--script for this page-->
<script>
jQuery(document).ready(function($) {
   $('#cmb_barang').change(function() { // Jika Select Box id provinsi dipilih
     var tamp = $(this).val(); // Ciptakan variabel provinsi
     $.ajax({
            type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'page/barangmasuk/get_barang.php', // File yang akan memproses data
         data: 'tamp=' + tamp, // Data yang akan dikirim ke file pemroses
         success: function(data) { // Jika berhasil
              $('.tampung').html(data); // Berikan hasil ke id kota
            }
           
     
    });
});
});
</script>		

<script>
jQuery(document).ready(function($) {
   $('#cmb_barang').change(function() { // Jika Select Box id provinsi dipilih
     var tamp = $(this).val(); // Ciptakan variabel provinsi
     $.ajax({
            type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'page/produk/get_barang.php', // File yang akan memproses data
         data: 'tamp=' + tamp, // Data yang akan dikirim ke file pemroses
         success: function(data) { // Jika berhasil
              $('.tampung').html(data); // Berikan hasil ke id kota
            }
           
     
    });
});
});
</script>	

<script>
jQuery(document).ready(function($) {
   $('#cmb_barang').change(function() { // Jika Select Box id provinsi dipilih
     var tamp = $(this).val(); // Ciptakan variabel provinsi
     $.ajax({
            type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'page/barangmasuk/get_satuan.php', // File yang akan memproses data
         data: 'tamp=' + tamp, // Data yang akan dikirim ke file pemroses
         success: function(data) { // Jika berhasil
              $('.tampung1').html(data); // Berikan hasil ke id kota
            }
           
     
    });
});
});
</script> 

<script type="text/javascript">
    jQuery(document).ready(function($){
        $(function(){
    $('#Myform1').submit(function() {
        $.ajax({
            type: 'POST',
            url: 'page/laporan/export_laporan_barangmasuk_excel.php',
            data: $(this).serialize(),
            success: function(data) {
             $(".tampung1").html(data);
             $('.table').DataTable();

            }
        });

        return false;
         e.preventDefault();
        });
    });
});
</script>


 <script type="text/javascript">
    jQuery(document).ready(function($){
        $(function(){
    $('#Myform2').submit(function() {
        $.ajax({
            type: 'POST',
            url: 'page/laporan/export_laporan_barangkeluar_excel.php',
            data: $(this).serialize(),
            success: function(data) {
             $(".tampung2").html(data);
             $('.table').DataTable();

            }
        });

        return false;
         e.preventDefault();
        });
    });
});
</script>

  


  

</body>

</html>
