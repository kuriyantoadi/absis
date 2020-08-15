<!doctype html>

<html class="no-js" lang="en">

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

                      <div class="card-body">
                          <table class="table table-bordered">

                            <h3 style="margin-bottom: 40px; margin-top: 20px"><center>Tambah Siswa</h3>
                              <?php
                                include '../koneksi.php';
                                $id_siswa = $_GET['id_siswa'];
                                $data = mysqli_query($koneksi, "SELECT * from tb_siswa, tb_kelas where tb_siswa.id_kelas=tb_kelas.id_kelas AND id_siswa='$id_siswa'");
                                while ($d = mysqli_fetch_array($data)) {
                                    ?>
                              <tr>
                                <td>NISN Siswa</td>
                                <td>
                                  <input type="hidden" name="id_siswa" value="<?php echo $d['id_siswa'] ?>">
                                  <input type="input" name="nisn" class="form-control" value="<?php echo $d['nisn']; ?>" placeholder="NISN Siswa">
                                </td>
                              </tr>
                              <tr>
                                <td>Nama Siswa</td>
                                <td>
                                  <input type="input" name="nama_siswa" class="form-control" value="<?php echo $d['nama_siswa']; ?>" placeholder="Nama Siswa">
                                </td>
                              </tr>

                              <tr>
                                <td>Kelas</td>
                                  <td>
                                    <select class="form-control" name="level">
                                      <option value="<?php echo $d['kelas']; ?>"> Pilihan Awal (<?php echo $d['kelas']; ?>)</option>

                                    </select>
                                  </td>
                              </tr>

                              <tr>
                                <td colspan="2"><center>
                                  <input type="submit" name="" class="btn btn-success " value="Submit">
                                </td>
                              </tr>

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
