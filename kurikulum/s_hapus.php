<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
session_start();
if ($_SESSION['status']!="kurikulum") {
    header("location:../index.php?pesan=belum_login");
} else {
    $id_siswa = $_GET['id_siswa'];

    // menghapus data dari database
    mysqli_query($koneksi, "delete from tb_siswa where id_siswa='$id_siswa' ");

    // mengalihkan halaman kembali ke index.php
    header("location:s_tampil.php");
}
