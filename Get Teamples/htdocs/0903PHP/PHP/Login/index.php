<?php
session_start();
if(isset($_POST['btnLogin'])){
    //huongnguyenak96@gmail.com | 111111
    if($_POST['txtEmail'] == "phanthong13@gmail.com" && $_POST['txtPassword'] == '123'){
        //login thanh cong => luu session
        $_SESSION['user'] = $_POST['txtEmail'];
        header('Location:home.php');

    }
    else{
        $_SESSION['error'] = "Sai thông tin đăng nhập";
        header('Location:login.php');
    }
}
?>