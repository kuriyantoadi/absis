<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Program Absensi Siswa</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../apple-icon.png">
    <link rel="shortcut icon" href="../favicon.ico">


    <link rel="stylesheet" href="../vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
  <?php include('panel.php') ?>

  <div class="breadcrumbs" style="margin-bottom: 10px" >
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Dashboard Kurikulum</h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                  <ol class="breadcrumb text-right">
                      <!-- <li><a href="#">Dashboard</a></li>
                      <li class="active">Widgets</li> -->
                  </ol>
              </div>
          </div>
      </div>
  </div>


  <div class="col-md-6 col-lg-4">
      <div class="card bg-flat-color-1 text-light">
          <div class="card-body">
              <div class="h4 m-0">1.500 Siswa</div>
              <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 90%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              <small class="text-light">Jumlah Seluruh Siswa</small>
          </div>
      </div>
  </div>
  <!--/.col-->

  <div class="col-md-6 col-lg-4">
      <div class="card bg-flat-color-5 text-light">
          <div class="card-body">
              <div class="h4 m-0">80 Tenaga Pendidik</div>
              <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 20%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              <small class="text-light">Jumlah Seluruh Guru</small>
          </div>
      </div>
  </div>
  <!--/.col-->

  <div class="col-md-6 col-lg-4">
      <div class="card bg-flat-color-4 text-light">
          <div class="card-body">
              <div class="h4 m-0">70 Kelas</div>
              <div class="progress-bar bg-light mt-2 mb-2" role="progressbar" style="width: 40%; height: 5px;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
              <small class="text-light">Jumlah Seluruh Kelas</small>
          </div>
      </div>
  </div>

    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/main.js"></script>


    <script src="../vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
      (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
          map: 'world_en',
          backgroundColor: null,
          color: '#ffffff',
          hoverOpacity: 0.7,
          selectedColor: '#1de9b6',
          enableZoom: true,
          showTooltip: true,
          values: sample_data,
          scaleColors: ['#1de9b6', '#03a9f5'],
          normalizeFunction: 'polynomial'
        });
      })(jQuery);
    </script>

  </body>

  </html>
