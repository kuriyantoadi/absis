<?php
include '../koneksi.php';

  $nama_guru = $_POST['nama_guru'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $level  = $_POST['level'];


  mysqli_query($koneksi, "insert into tb_guru values(
                '',
                '$nama_guru',
                '$username',
                '$password',
                '$level'

                )")
                or die(mysqli_error($koneksi));

header("location:g_tampil.php");
