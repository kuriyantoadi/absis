<?php
include '../koneksi.php';

  $nisn = $_POST['nisn'];
  $nama_siswa = $_POST['nama_siswa'];
  $id_kelas = $_POST['id_kelas'];


  mysqli_query($koneksi, "insert into tb_siswa values(
                '',
                '$nisn',
                '$nama_siswa',
                '$id_kelas'

                )")
                or die(mysqli_error($koneksi));

header("location:s_tampil.php");
