<?php
//set waktu
date_default_timezone_set('Asia/Jakarta');
$tgl = date('Y-m-d H:i:s');

//koneksi database
$HOSTNAME = "localhost";
$DATABASE = "db_ppdb";
$USERNAME = "root";
$PASSWORD = "";

$KONEKSI = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASE);

if (!$KONEKSI) {
    die("Koneksi database error: " . mysqli_connect_error());
}


//Fungsi autonumber
function autonumber($tabel, $kolom, $lebar = 0, $awalan)
{
    global $KONEKSI;

    $auto = mysqli_query($KONEKSI, "SELECT $kolom FROM $tabel ORDER BY $kolom DESC LIMIT 1") or die(mysqli_error($KONEKSI));
    $jumlah_record = mysqli_num_rows($auto);

    if ($jumlah_record == 0) {
        $nomor = 1;
    } else {
        $row = mysqli_fetch_array($auto);
        $nomor = isset($row[0]) ? intval(substr($row[0], strlen($awalan))) + 1 : 1;
    }

    return $awalan . str_pad($nomor, $lebar, "0", STR_PAD_LEFT);
}

// echo autonumber("tbl_users", "id_user",7, "USR");


//fungsi register
function registrasi($data)
{
    global $KONEKSI, $tgl;

    $id_user = mysqli_real_escape_string($KONEKSI, stripslashes($data['id_user']));
    $nama = mysqli_real_escape_string($KONEKSI, stripslashes($data['nama']));
    $nisn = mysqli_real_escape_string($KONEKSI, stripslashes($data['nisn']));
    $email = strtolower(mysqli_real_escape_string($KONEKSI, stripslashes($data['email'])));
    $password = mysqli_real_escape_string($KONEKSI, $data['password']);
    $password2 = mysqli_real_escape_string($KONEKSI, $data['cpassword']);

    // Validasi email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Format email tidak valid!');</script>";
        return false;
    }

    // Validasi NISN harus angka dan 10 digit
    if (!preg_match('/^\d{10}$/', $nisn)) {
        echo "<script>alert('NISN harus terdiri dari 10 digit angka!');</script>";
        return false;
    }

    // Cek apakah email sudah ada di database
    $result = mysqli_query($KONEKSI, "SELECT email FROM tbl_users WHERE email='$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Email sudah terdaftar!');</script>";
        return false;
    }

    // Cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>alert('Konfirmasi password tidak sesuai!');</script>";
        return false;
    }

    // Enkripsi password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Ambil id_tipe_user untuk Admin
    $tipe_user_query = mysqli_query($KONEKSI, "SELECT id_tipe_user FROM tbl_tipe_user WHERE tipe_user = 'Admin'");
    if (!$tipe_user_query || mysqli_num_rows($tipe_user_query) == 0) {
        echo "<script>alert('Tipe user tidak ditemukan!');</script>";
        return false;
    }
    $row = mysqli_fetch_assoc($tipe_user_query);
    $id_tipe_user = $row['id_tipe_user'];

    // Simpan ke database
    $sql_users = "INSERT INTO tbl_users (id_user, nisn, role, email, password, create_at) 
                  VALUES ('$id_user', '$nisn', '$id_tipe_user', '$email', '$password_hash', '$tgl')";

    if (!mysqli_query($KONEKSI, $sql_users)) {
        die("Gagal menambahkan user: " . mysqli_error($KONEKSI));
    }

    $sql_admin = "INSERT INTO tbl_admin (nama_admin, id_user, create_at) 
                  VALUES ('$nama', '$id_user', '$tgl')";

    if (!mysqli_query($KONEKSI, $sql_admin)) {
        die("Gagal menambahkan admin: " . mysqli_error($KONEKSI));
    }

    echo "<script>document.location.href='login.php';</script>";
    return mysqli_affected_rows($KONEKSI);
}



//fungsi tampil data
function tampil($DATA)
{
    global $KONEKSI;

    $HASIL = mysqli_query($KONEKSI, $DATA);
    $data = [];

    while ($row = mysqli_fetch_assoc($HASIL)) {
        $data[] = $row;
    }

    mysqli_free_result($HASIL); // Bebaskan memori hasil query
    return $data;
}
