<?php include('header.php'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="align-items-center mb-4">
      <h1 class="h3 mb-0 text-gray-800">
        Rekap Harian Laporan Covid Indonesia
      </h1>
    </div>

    <div class="card shadow mb-4">
            <div class="card-header py-3">
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="150px">Tanggal</th>
                      <th>Meninggal</th>
                      <th>Sembuh</th>
                      <th>Positif</th>
                      <th>Dirawat</th>
                      <th>Positif Kumulatif</th>
                      <th>Sembuh Kumulatif</th>
                      <th>Meniggal Kumulatif</th>
                      <th>Dirawat Kumulatif</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php include('data_update.php'); ?>
                    <?php foreach($data['update']['harian'] as $d){ ?>
                        <tr>
                            <td><?php echo substr($d['key_as_string'], 0, 10); ?></td>
                            <td><?php echo number_format($d['jumlah_meninggal']['value']); ?></td>
                            <td><?php echo number_format($d['jumlah_sembuh']['value']); ?></td>
                            <td><?php echo number_format($d['jumlah_positif']['value']); ?></td>
                            <td><?php echo number_format($d['jumlah_dirawat']['value']); ?></td>
                            <td><?php echo number_format($d['jumlah_positif_kum']['value']); ?></td>
                            <td><?php echo number_format($d['jumlah_sembuh_kum']['value']); ?></td>
                            <td><?php echo number_format($d['jumlah_meninggal_kum']['value']); ?></td>
                            <td><?php echo number_format($d['jumlah_dirawat_kum']['value']); ?></td>
                        </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</div>
<?php include('footer.php'); ?>