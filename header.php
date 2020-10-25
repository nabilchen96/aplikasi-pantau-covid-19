<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="template/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <!-- <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div> -->
        <div class="sidebar-brand-text mx-3">Covid 19</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="rekapharian.php">
          <i class="fas fa-table"></i>
          <span>Rekap Harian</span>
        </a>
      </li>

      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Provinsi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-map-marker-alt"></i>
          <span>Sumatera</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="provinsi.php?provinsi=RIAU">Riau</a>
            <a class="collapse-item" href="provinsi.php?provinsi=KEPULAUAN RIAU">Kepulauan Riau</a>
            <a class="collapse-item" href="provinsi.php?provinsi=SUMATERA UTARA">Sumatera Utara</a>
            <a class="collapse-item" href="provinsi.php?provinsi=SUMATERA BARAT">Sumatera Barat</a>
            <a class="collapse-item" href="provinsi.php?provinsi=SUMATERA SELATAN">Sumatera Selatan</a>
            <a class="collapse-item" href="provinsi.php?provinsi=ACEH">Aceh</a>
            <a class="collapse-item" href="provinsi.php?provinsi=LAMPUNG">Lampung</a>
            <a class="collapse-item" href="provinsi.php?provinsi=JAMBI">Jambi</a>
            <a class="collapse-item" href="provinsi.php?provinsi=BENGKULU">Bengkulu</a>
            <a class="collapse-item" href="provinsi.php?provinsi=KEPULAUAN BANGKA BELITUNG">Bangka Belitung</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-map-marker-alt"></i>
          <span>Jawa</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="provinsi.php?provinsi=DKI JAKARTA">Jakarta</a>
            <a class="collapse-item" href="provinsi.php?provinsi=JAWA BARAT">Jawa Barat</a>
            <a class="collapse-item" href="provinsi.php?provinsi=JAWA TENGAH">Jawa Tengah</a>
            <a class="collapse-item" href="provinsi.php?provinsi=JAWA TIMUR">Jawa Timur</a>
            <a class="collapse-item" href="provinsi.php?provinsi=BANTEN">Banten</a>
            <a class="collapse-item" href="provinsi.php?provinsi=DAERAH ISTIMEWA YOGYAKARTA">Yogyakarta</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-map-marker-alt"></i>
          <span>Kalimantan</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="provinsi.php?provinsi=KALIMANTAN TIMUR">Kalimantan Timur</a>
            <a class="collapse-item" href="provinsi.php?provinsi=KALIMANTAN SELATAN">Kalimantan Selatan</a>
            <a class="collapse-item" href="provinsi.php?provinsi=KALIMANTAN TENGAH">Kalimantan Tengah</a>
            <a class="collapse-item" href="provinsi.php?provinsi=KALIMANTAN BARAT">Kalimantan Barat</a>
            <a class="collapse-item" href="provinsi.php?provinsi=KALIMANTAN UTARA">Kalimantan Utara</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-map-marker-alt"></i>
          <span>Sulawesi</span>
        </a>
        <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="provinsi.php?provinsi=SULAWESI SELATAN">Sulawesi Selatan</a>
            <a class="collapse-item" href="provinsi.php?provinsi=SULAWESI UTARA">Sulawesi Utara</a>
            <a class="collapse-item" href="provinsi.php?provinsi=SULAWESI TENGGARA">Sulawesi Tenggara</a>
            <a class="collapse-item" href="provinsi.php?provinsi=GORONTALO">Gorontalo</a>
            <a class="collapse-item" href="provinsi.php?provinsi=SULAWESI BARAT">Sulawesi Barat</a>
            <a class="collapse-item" href="provinsi.php?provinsi=SULAWESI TENGAH">Sulawesi Tengah</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="provinsi.php?provinsi=BALI">
          <i class="fas fa-map-marker-alt"></i>
          <span>Bali</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-map-marker-alt"></i>
          <span>Papua</span>
        </a>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="provinsi.php?provinsi=PAPUA">Papua</a>
            <a class="collapse-item" href="provinsi.php?provinsi=PAPUA BARAT">Papua Barat</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="provinsi.php?provinsi=NUSA TENGGARA BARAT">
          <i class="fas fa-map-marker-alt"></i>
          <span>Nusa Tenggara Barat</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="provinsi.php?provinsi=NUSA TENGGARA TIMUR">
          <i class="fas fa-map-marker-alt"></i>
          <span>Nusa Tenggara Timur</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="provinsi.php?provinsi=MALUKU">
          <i class="fas fa-map-marker-alt"></i>
          <span>Maluku</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="provinsi.php?provinsi=MALUKU UTARA">
          <i class="fas fa-map-marker-alt"></i>
          <span>Maluku Utara</span>
        </a>
      </li>

      <hr class="sidebar-divider">

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

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->