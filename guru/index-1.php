<?php
  session_start();
  if ($_SESSION['status']!="guru") {
      header("location:../../index.php?pesan=belum_login");
  }
