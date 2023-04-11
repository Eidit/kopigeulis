
<br>
<script type="text/javascript" src="chartjs/dist/Chart.js"></script>
       <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Menu Utama</h1>
           
          </div>
          <!-- Content Row -->
          <div class="row">
      
      
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                     <a  href="?page=gudang"> <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>Bahan Baku</h4></div></a>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                        
                        </div>
                        <div class="col">
                         
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-boxes fa-2x text-black-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

      
       <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a  href="?page=produk"> <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>Produk</h4></div></a>
                   
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-coffee fa-2x text-black-300"></i>
                    </div>

                  </div>
                </div>
              </div>
            </div>
            </div>
            <div class="card shadow mb-4">
              <div class="card-header py-2">
                <h6 class="m-0 font-weight-bold text-primary">Produk</h6>
              </div>
                <div class="card-body">
                  <div class="chart-bar">
                    <canvas id="myChart"></canvas>
                    <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Arabika Wine", "Arabika Natural", "Arabika Honey", "Arabika Fullwash", "Robusta", "Kopi Lanang", "Kopi Geulis Blend", "Kopi Geulis Rempah", "Kopi Geulis Gula Aren"],
        datasets: [{
          label: '',
          data: [900, 320, 95, 490, 250, 60, 220, 175, 160],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
                  </div>
                </div>
            </div>          