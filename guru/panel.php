
<?php
$nama_login = $_SESSION['username'];

?>


<aside id="left-panel" class="left-panel">
  <nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="./"><img src="/logo.png" alt="SMK N 1 Kragilan"></a>
      <a class="navbar-brand hidden" href="./"><img src="/logo.png" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

  <!-- Header-->
  <header id="header" class="header">

    <div class="header-menu">

      <div class="col-sm-7">
        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-tasks"></i></a>
      </div>

      <div class="col-sm-5">
        <div class="user-area dropdown float-right">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <strong style="margin-top: 15px">Anda Login Sebagai <?php echo $nama_login ?></strong>
            <img class="user-avatar rounded-circle" src="../images/admin-panel.png" alt="User Avatar">
          </a>

          <div class="user-menu dropdown-menu">
            <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
          </div>
        </div>



      </div>
    </div>

  </header><!-- /header -->
  <!-- Header-->





<!-- Right Panel -->
