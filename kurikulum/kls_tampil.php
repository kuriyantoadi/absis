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
  <title>Rekap Absensi Siswa</title>
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

  <div class="content mt-3">
      <div class="animated fadeIn">
          <div class="row">


              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                      </div>
                      <div class="card-body">
                          <table id="bootstrap-data-table-export" class="table table-hover table-bordered">

                            <h3 style="margin-bottom: 40px; margin-top: 20px"><center>Data Kelas</h3>
                              <a style="margin-bottom: 30px" type="button" class="btn btn-info btn-sm" href="kls_tambah.php" >Tambah Kelas</a>
                              <thead>
                                  <tr>
                                      <th><center>No</th>
                                      <th><center>Nama Kelas</th>
                                      <th><center>Wali Kelas</th>
                                      <th><center>Edit</th>
                                      <th><center>Hapus</th>

                                  </tr>
                              </thead>

                              <?php
                                include('../koneksi.php');
                                  $no=1;
                                 $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
                                 while ($d = mysqli_fetch_array($data)) {
                                     ?>
                              <tbody>
                                  <tr>
                                      <td><center><?php echo $no++; ?></td>
                                      <td><center><?php echo $d['nama_kelas']; ?></td>
                                      <td><?php echo $d['wali_kelas']; ?></td>
                                      <td><center>
                                        <a type="button" class="btn btn-warning btn-sm" href="kls_edit.php?id_kelas=<?php echo $d['id_kelas']; ?>">Edit</a>
                                      </td>
                                      <td><center>
                                        <a type="button" class="btn btn-danger btn-sm" href="kls_hapus.php?id_kelas=<?php echo $d['id_kelas']; ?>" onclick="return confirm('Anda yakin Hapus data Kelas <?php echo $d['nama_kelas']; ?> ?')">Hapus</a>
                                      </td>
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


</div><!-- /#right-panel -->





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
