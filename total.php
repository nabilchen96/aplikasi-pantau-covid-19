<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Jumlah Positif</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">
                <?php echo number_format($data['update']['total']['jumlah_positif']); ?>
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
                <?php echo number_format($data['update']['total']['jumlah_dirawat']); ?>
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
                <?php echo number_format($data['update']['total']['jumlah_sembuh']); ?>
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
                <?php echo number_format($data['update']['total']['jumlah_meninggal']); ?>
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