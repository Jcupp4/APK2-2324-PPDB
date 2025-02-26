<?php
@session_start();
require_once 'function.php'; // Pastikan file ini ada untuk koneksi database

// Jika user sudah login, redirect ke halaman sesuai levelnya
// if (@$_SESSION['email']) {
//     if ($_SESSION['level'] == "Admin") {
//         header("location:../admin/index.php");
//     } elseif ($_SESSION['level'] == "Petugas") {
//         header("location:../petugas/index.php");
//     } elseif ($_SESSION['level'] == "Penyewa") {
//         header("location:../penyewa/index.php");
//     } else {
//         header("location:../inc/login.php");
//     }
//     exit();
// }

// Proses Registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["registrasi"])) {
    $nama = mysqli_real_escape_string($KONEKSI, $_POST["nama"]);
    $nisn = mysqli_real_escape_string($KONEKSI, $_POST["nisn"]);
    $email = mysqli_real_escape_string($KONEKSI, $_POST["email"]);
    $password = mysqli_real_escape_string($KONEKSI, $_POST["password"]);
    $confirm_password = mysqli_real_escape_string($KONEKSI, $_POST["confirm-password"]);

    // Cek apakah password dan confirm password sama
    if ($password !== $confirm_password) {
        echo "<script>alert('Password dan Konfirmasi Password tidak cocok!');</script>";
    } else {
        // Hash password sebelum disimpan
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // Query untuk insert data ke database
        $query = "INSERT INTO tbl_users (nama, nisn, email, password) VALUES ('$nama', '$nisn', '$email', '$password_hash')";

        if (mysqli_query($KONEKSI, $query)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
        } else {
            echo "<script>alert('Registrasi gagal! Email mungkin sudah terdaftar.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi</title>
    <meta charset="utf-8" />
    <meta name="description" content="Seven admin dashboard live demo. Check out all the features of the admin panel. Light & dark skins. A large number of settings, additional services and widgets." />
    <meta name="keywords" content="Seven, bootstrap, bootstrap 5, dmin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Seven HTML Pro - Bootstrap 5 HTML Multipurpose Light/Dark Admin Dashboard Theme by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/products/seven-html-pro" />
    <meta property="og:site_name" content="Seven HTML Pro by Keenthemes" />
    <link rel="canonical" href="basic.html" />
    <link rel="shortcut icon" href="../assets/assetslogin/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->



    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="../assets/assetslogin/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/assetslogin/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Google tag-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37564768-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-37564768-1');
    </script>
    <!--end::Google tag-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>

<body id="kt_body" class="auth-bg">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div class="d-flex flex-column flex-root">
        <style>
            .auth-page-bg {
                background-image: url('../assets/assetslogin/media/illustrations/sigma-1/14.png');
            }

            [data-bs-theme="dark"] .auth-page-bg {
                background-image: url('../assets/assetslogin/media/illustrations/sigma-1/14-dark.png');
            }
        </style>
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed auth-page-bg">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Logo-->
                <a href="../../index.html" class="mb-12">
                    <img alt="Logo" src="../assets/assetslogin/media/logos/logo-default.svg" class="h-60px" />
                </a>
                <!--end::Logo-->

                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <form class="form w-100" id="registerForm" method="POST">
                        <div class="mb-10 text-center">
                            <h1 class="text-gray-900 mb-3">
                                Create an Account</h1>
                            <div class="text-gray-500 fw-semibold fs-4">
                                Already have an account?
                                <a href="login.php" class="link-primary fw-bold">
                                    Sign in here
                                </a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-light-primary fw-bold w-100 mb-10">
                            <img alt="Logo" src="../assets/assetslogin/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />
                            Sign in with Google
                        </button>
                        <!--end::Action-->

                        <!--begin::Separator-->
                        <div class="d-flex align-items-center mb-10">
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                            <span class="fw-semibold text-gray-500 fs-7 mx-2">OR</span>
                            <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                        </div>
                        <!--end::Separator-->
                        <div class="row fv-row mb-7">
                            <div class="col-xl-6">
                                <label class="form-label fw-bold text-gray-900 fs-6">Nama Lengkap</label>
                                <input class="form-control form-control-lg form-control-solid" type="text" name="nama" required />
                            </div>
                            <div class="col-xl-6">
                                <label class="form-label fw-bold text-gray-900 fs-6">NISN</label>
                                <input class="form-control form-control-lg form-control-solid" type="number" name="nisn" required />
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="form-label fw-bold text-gray-900 fs-6">Email</label>
                            <input class="form-control form-control-lg form-control-solid" type="email" name="email" required />
                        </div>
                        <div class="mb-10 fv-row">
                            <label class="form-label fw-bold text-gray-900 fs-6">Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" name="password" required />
                        </div>
                        <div class="fv-row mb-5">
                            <label class="form-label fw-bold text-gray-900 fs-6">Confirm Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password" name="confirm-password" required />
                        </div>
                        <div class="text-center">
                            <button type="submit" name="registrasi" class="btn btn-lg btn-primary">
                                <span class="indicator-label">
                                    Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-semibold fs-6">
                    <a href="https://keenthemes.com/" class="text-muted text-hover-primary px-2">About</a>

                    <a href="https://devs.keenthemes.com/" class="text-muted text-hover-primary px-2">Support</a>

                    <a href="https://keenthemes.com/products/seven-html-pro" class="text-muted text-hover-primary px-2">
                        Purchase
                    </a>
                </div>
                <!--end::Links-->
            </div>
        </div>
        <script src="../assets/assetslogin/plugins/global/plugins.bundle.js"></script>
        <script src="../assets/assetslogin/js/scripts.bundle.js"></script>
</body>

</html>