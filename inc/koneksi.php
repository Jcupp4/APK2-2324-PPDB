<?php
$HOSTNAME    = "localhost";
$USERNAME    = "root";
$PASSWORD    = "";
$DATABASE    = "db_ppdb";

$koneksi   = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$koneksi){
    die("gagal terkoneksi : " . mysqli_connect_error());
} else {
    echo"berhasil terkoneksi";
}

?> 