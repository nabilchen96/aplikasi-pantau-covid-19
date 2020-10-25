<?php 

include('data_provinsi.php');
include('header.php'); 

$jumlah_kasus;
$jumlah_sembuh;
$jumlah_meninggal;
$jumlah_dirawat;
$laki_laki;
$perempuan;
$penambahan_positif;
$penambahan_sembuh;
$penambahan_meninggal;

foreach($data['list_data'] as $d){
    if($d['key'] == $_GET['provinsi']){
        $jumlah_kasus           = $d['jumlah_kasus'];
        $jumlah_sembuh          = $d['jumlah_sembuh'];
        $jumlah_meninggal       = $d['jumlah_meninggal'];
        $jumlah_dirawat         = $d['jumlah_dirawat'];
        $laki_laki              = $d['jenis_kelamin'][0]['doc_count'];
        $perempuan              = $d['jenis_kelamin'][1]['doc_count'];
        $penambahan_positif     = $d['penambahan']['positif'];
        $penambahan_sembuh      = $d['penambahan']['sembuh'];
        $penambahan_meninggal   = $d['penambahan']['meninggal'];
    }
}
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="align-items-center mb-4">
      <h1 class="h3 mb-0 text-gray-800">
        Data Covid Per-Provinsi
      </h1>
    </div>

    <div class="alert alert-success">
        <h3>Data <?php echo $_GET['provinsi']; ?></h3>
    </div>

    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah Kasus</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo number_format($jumlah_kasus); ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-head-side-cough fa-2x text-warning-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Dirawat</div>
                    <div class="h5 mb-0 font-weight-bold text-warning-800">
                        <?php echo number_format($jumlah_dirawat); ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-procedures fa-2x text-warning-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>

        

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Sembuh</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php echo number_format($jumlah_sembuh); ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-heart fa-2x text-success-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah Meninggal</div>
                    <div class="h5 mb-0 font-weight-bold text-danger-800">
                        <?php echo number_format($jumlah_meninggal);?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-skull-crossbones fa-2x text-danger-300"></i>
                </div>
                </div>
            </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kasus Berdasarkan Jenis Kelamin</h6>
                </div>
                <div class="card-body" style="background:black;">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>

<script>
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["laki-laki", "perempuan"],
    datasets: [{
      label: "Kasus",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: [<?php echo $laki_laki; ?>, <?php echo $perempuan; ?>],
    }],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 6
        },
        maxBarThickness: 50,
      }],
      yAxes: [{
        ticks: {
          min: 0,
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});

</script>