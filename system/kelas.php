<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sufee Admin - HTML5 Admin Template</title>
  <meta name="description" content="Sufee Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="favicon.ico">


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

  <?php include('tampilan/panel.php') ?>


  <div class="breadcrumbs">
      <div class="col-sm-4">
          <div class="page-header float-left">
              <div class="page-title">
                  <h1>Dashboard</h1>
              </div>
          </div>
      </div>
      <div class="col-sm-8">
          <div class="page-header float-right">
              <div class="page-title">
                  <ol class="breadcrumb text-right">
                      <li><a href="#">Dashboard</a></li>
                      <li><a href="#">Table</a></li>
                      <li class="active">Data table</li>
                  </ol>
              </div>
          </div>
      </div>
  </div>

  <div class="content mt-3">
      <div class="animated fadeIn">
          <div class="row">

              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <strong class="card-title">Data Table</strong>
                      </div>
                      <div class="card-body">
                          <table id="bootstrap-data-table-export" class="table table-striped table-bordered">

                            <?php
                              include '../koneksi.php';
                              $mapel = $_GET['mapel'];
                              $d_judul = mysqli_query($koneksi, "SELECT * FROM $mapel, tb_guru, tb_kelas where $mapel.id_guru=tb_guru.id_guru");
                              while ($tampil_judul = mysqli_fetch_array($d_judul)) {
                                  ?>

                             <h5 style="margin-top: 15px; margin-bottom: 30px;">Guru Mata Pelajaran : <?php echo $tampil_judul['nama_guru']; ?> ( <?php echo $tampil_judul['nama_mapel']; ?>)</h5>

                           <?php
                              } ?>
                              <thead>
                                  <tr>
                                      <th>NO</th>
                                      <th>NISN</th>
                                      <th>Nama Siswa</th>
                                      <th>Kelas</th>
                                      <th>Pertemuan 1</th>
                                  </tr>
                              </thead>

                              <?php
                                $no=1;
                              
                                 $data = mysqli_query($koneksi, "SELECT * FROM $mapel, tb_siswa, tb_kelas  where $mapel.id_siswa=tb_siswa.id_siswa");

                                 while ($d = mysqli_fetch_array($data)) {
                                     ?>
                              <tbody>
                                  <tr>
                                      <td><?php echo $no++; ?></td>
                                      <td><?php echo $d['nisn']; ?></td>
                                      <td><?php echo $d['nama_siswa']; ?></td>
                                      <td><?php echo $d['kelas']; ?></td>
                                      <td><?php echo $d['pertemuan1']; ?></td>

                                  </tr>
                              </tbody>

                            <?php
                                 } ?>
                          </table>
                      </div>
                  </div>
              </div>


          </div>
      </div><!-- .animated -->
  </div><!-- .content -->





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
