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
    <title>Login Program Absis</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">

                <div class="login-form">
                  <center>
                    <h2>REKAP ABSENSI SISWA</h2>
                    <label style="margin-bottom: 20px">SMK Negeri 1 Kragilan</label>
                    <?php
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "gagal") {
                                    echo "
                        <div class='alert alert-danger' role='alert'>
                          <center>Maaf Password anda salah!
                        </div>";
                                } elseif ($_GET['pesan'] == "logout") {
                                    echo "
                        <div class='alert alert-warning' role='alert'>
                          <center>Anda Berhasil Logout
                        </div>
                        ";
                                } elseif ($_GET['pesan'] == "gagal1") {
                                    echo "
                        <div class='alert alert-warning' role='alert'>
                          <center>Mohon anda Login lagi
                        </div>
                        ";
                                } elseif ($_GET['pesan'] == "belum_login") {
                                    echo "
                        <div class='alert alert-danger' role='alert'>
                          <center>Maaf anda harus login dulu
                        </div>";
                                }
                            }
                            ?>

                  </center>
                    <form action="cek_login.php" method="post">
                        <div class="form-group">
                            <strong>Username</strong>
                            <input name="username" type="" class="form-control" placeholder="">
                        </div>
                            <div class="form-group">
                              <strong>Password</strong>
                              <input name="password" type="password" class="form-control" placeholder="">
                        </div>
                            <button type="submit" class="btn btn-success">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
