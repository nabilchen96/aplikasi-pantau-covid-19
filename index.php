
<?php 

include('data_update.php');
include('header.php'); 

?>

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="align-items-center mb-4">
      <h1 class="h3 mb-0 text-gray-800">
        Laporan Covid Indonesia
      </h1>
    </div>
    <?php include('total.php'); ?>

    <hr>
    <h4>Laporan Harian Tanggal : <?php echo $data['update']['penambahan']['created']; ?></h4>
    <br>

    <?php include('harian.php'); ?>

  </div>
  <!-- /.container-fluid -->

<?php include('footer.php'); ?>
