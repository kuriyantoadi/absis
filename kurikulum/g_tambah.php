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

            <div class="card-body">
              <table class="table table-bordered">

                <h3 style="margin-bottom: 40px; margin-top: 20px">
                  <center>Tambah Guru
                </h3>
                <form class="" action="g_up_tambah.php" method="post">
                  <tr>
                    <td>Nama Guru</td>
                    <td>
                      <input type="input" name="nama_guru" class="form-control" value="" placeholder="Nama Guru" required>
                    </td>
                  </tr>
                  <tr>
                    <td>Username</td>
                    <td>
                      <input type="input" name="username" class="form-control" value="" placeholder="Username" required>
                    </td>
                  </tr>
                  <tr>
                    <td>Password</td>
                    <td>
                      <input type="password" name="password" class="form-control" value="" placeholder="Password" required>
                    </td>
                  </tr>
                  <tr>
                    <td>Level</td>
                    <td>
                      <select class="form-control" name="level" required>
                        <option value="">Pilih Level</option>
                        <option value="kurikulum">Kurikulum</option>
                        <option value="Guru">Guru</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <center>
                        <input type="submit" name="" class="btn btn-success " value="Submit">
                    </td>
                  </tr>


              </table>
              </form>

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
