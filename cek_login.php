<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
// belum mengunakan MD5
$username = addslashes(trim($_POST['username']));
// $username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from tb_guru where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);


if ($cek > 0) {
    $login = mysqli_fetch_assoc($data);

    if ($login['level']=="admin") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin";
        header("location:e/index.php");
    } elseif ($login['level']=="kurikulum") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "kurikulum";
        header("location:kurikulum/index.php");
    } elseif ($login['level']=="guru") {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "guru";
        header("location:guru/index.php");
    } else {
        // echo "gagal1";
        header("location:index.php?pesan=gagal1");
    }
} else {
    // echo "gagal2";
    header("location:index.php?pesan=gagal");
}
