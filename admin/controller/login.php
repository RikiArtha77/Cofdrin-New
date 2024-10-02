<?php
if(isset($_POST['email'])){
    //action
    $conn=$con->koneksi();
    $email=$_POST['email'];$psw=md5($_POST['password']);
    $sql = "SELECT * FROM users where password ='$psw' and email ='$email'  and active='Y'";
    $user = $conn->query($sql);
    if($user->num_rows > 0){
        //session_start();
        $sess=$user->fetch_array();
        $_SESSION['login']['email']=$sess['email'];
        $_SESSION['login']['id']=$sess['id'];
        header('Location: http://localhost/cofdrin/admin/index.php?mod=toko');
        exit();
    }else{
        $msg="Email dan Password tidak cocok";
        include_once 'views/v_login.php';
    }
}else{
    include_once 'views/v_login.php';
}
?>