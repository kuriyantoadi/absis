<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status']!="kurikulum") {
    header("location:../index.php?pesan=belum_login");
} else {
    $id_mapel = $_GET['id_mapel'];

    // menghapus data dari database
    mysqli_query($koneksi, "delete from tb_mapel where id_mapel='$id_mapel' ");

    // mengalihkan halaman kembali ke index.php
    header("location:mpl_tampil.php");
}
