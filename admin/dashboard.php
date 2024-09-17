<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
</div>
<div class="row">
  <div class="col-xl-4 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
              Total Ticket
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
              
            <?php
            include '../connection.php';
            $count = "SELECT * from ticket";
            if ($result = mysqli_query($con, $count)) {
              $rowcount = mysqli_num_rows($result);
              echo $rowcount;
            }
            ?>
              
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-fw fa-address-card fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
             Ticket Open
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
            <?php
              include '../connection.php';
              $count = "SELECT * from ticket WHERE keterangan = 'Open' ";
              if ($result = mysqli_query($con, $count)) {
                $rowcount = mysqli_num_rows($result);
                echo $rowcount;
              }
              ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-fw fa-address-card fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-4 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
             Ticket Close
            </div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">
            <?php
    include '../connection.php';
    $count = "SELECT * from ticket WHERE keterangan = 'Close' ";
    if ($result = mysqli_query($con, $count)) {
      $rowcount = mysqli_num_rows($result);
      echo $rowcount;
    }
    ?>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-fw fa-address-card fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>

<div class="col-12">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-header text-warning">
      Grafik
    </div>
    <div class="card-body">
      <div id="chart1">
        <!-- Ganti canvas dengan div untuk ApexCharts -->
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
     var options = {
          series: [{
          data: [0, 14,]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: ['Open', 'Close', ],
        }
        };

  var chart = new ApexCharts(document.querySelector("#chart1"), options);
  chart.render();
});
</script>

</body>
</html>
