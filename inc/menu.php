<?php
@$pages = $_GET['pages'];
switch ($pages) {

    case 'login':
        include '../index.php';
        break;

    case 'profile':
        include '../pages/master/profile.php';
        break;

    case 'tampil':
        include '../pages/master/tampil.php';
        break;

    case 'tambah':
        include '../pages/master/tambah.php';
        break;

    case 'invoice':
        include '../pages/master/invoice.php';
        break;

    case 'settings':
        include '../pages/master/setting.php';
        break;

    case 'user_admin':
        include '../pages/user admin/user_admin.php';
        break;


    default:
        include '../index.php';
        break;
}
