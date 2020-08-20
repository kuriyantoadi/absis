<?php

include('../../koneksi.php');
$namadb = "absis";

$sql = "SHOW TABLES FROM $namadb";

$result = mysqli_query($koneksi, $sql);

// while ($d = mysqli_fetch_array($data)) {


while ($row = mysqli_fetch_array($result)) {
    echo "{$row[0]}\n";
}

// mysqli_free_result($result);
