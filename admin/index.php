<?php 
session_start();
include_once '../config/Config.php';
$con = new Config();
if($con->auth()){
    //panggil fungsi
    switch (@$_GET['mod']){
        case 'toko':
            include_once 'controller/toko.php';
            break;
        default:
        include_once 'controller/toko.php';
    }
}else{
    //panggil cont login
    include_once 'controller/login.php';
}
?>