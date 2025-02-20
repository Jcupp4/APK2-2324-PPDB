<?php
@$menu = $_GET['menu'];
switch ($menu) {

    case 'login':
        include '../index.php';
        break;

    case 'signup':
        include 'register.php';
        break;

    default:
        include '../index.php';
        break;
}
