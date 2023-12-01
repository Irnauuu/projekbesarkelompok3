<?php
include_once '../controllers/C_Login.php';
$login = new C_Login();

if ($_GET['aksi'] == 'register') {
    
    $nama  = $_POST['nama'];
    $email  = $_POST['email'];
    $pass  = $_POST['password'];
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $role  = 'user';
    
    $login->register($nama, $email, $pass, $role);
    
} elseif ($_GET['aksi'] == 'login') {
    $email  = $_POST['email'];
    $pass  = $_POST['password'];



    
    // memanggil method login
    $login->login($email, $pass);
} elseif ($_GET['aksi'] == 'logout') {
        // $login->logout();
        session_destroy();
        header('location: ../index.php');

    }


?>