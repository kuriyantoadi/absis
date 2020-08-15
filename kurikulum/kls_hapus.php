<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status']!="kurikulum") {
    header("location:../index.php?pesan=belum_login");
} else {
    $id_kelas = $_GET['id_kelas'];

    // menghapus data dari database
    mysqli_query($koneksi, "delete from tb_kelas where id_kelas='$id_kelas' ");

    // mengalihkan halaman kembali ke index.php
    header("location:kls_tampil.php");
}
