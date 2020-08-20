<?php

function opsi_guru()
{
    include('../koneksi.php');
    $data = mysqli_query($koneksi, "SELECT * FROM tb_guru");
    while ($d = mysqli_fetch_array($data)) {
        echo "<option value=";
        echo $d['id_guru'];
        echo ">";
        echo $d['nama_guru'];
        echo "</option>";
    }
    return;
}


function opsi_kelas()
{
    include('../koneksi.php');
    $data = mysqli_query($koneksi, "SELECT * FROM tb_kelas");
    while ($d = mysqli_fetch_array($data)) {
        echo "<option value=";
        echo $d['id_kelas'];
        echo ">";
        echo $d['nama_kelas'];
        echo "</option>";
    }
    return;
}
