<?php
include '../koneksi.php';

  $nama_mapel = $_POST['nama_mapel'];
  $id_guru = $_POST['id_guru'];
  $id_kelas = $_POST['id_kelas'];

  mysqli_query($koneksi, "insert into tb_mapel values(
                '',
                '$nama_mapel',
                '$id_guru',
                '$id_kelas'
                )")
                or die(mysqli_error($koneksi));


header("location:mpl_tampil.php");
