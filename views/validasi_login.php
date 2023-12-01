<?php

if (isset($_SESSION['role'])){
    if ($_SESSION['role'] == "admin") {
        header('location:views/home.php');
    }else if ($_SESSION['role'] == "user"){

    }else{
        echo 'data tidak ada';
    }
}
?>