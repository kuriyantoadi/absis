<?php
include '../koneksi.php';

  $tingkat_kelas = $_POST['tingkat_kelas'];
  $nama_kelas = $_POST['nama_kelas'];
  $wali_kelas = $_POST['wali_kelas'];


  mysqli_query($koneksi, "insert into tb_kelas values(
                '',
                '$tingkat_kelas',
                '$nama_kelas',
                '$wali_kelas'

                )")
                or die(mysqli_error($koneksi));

header("location:kls_tampil.php");
