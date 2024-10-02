<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $sql="select * from ref_ukuran";
        $ukuran=$conn->query($sql);
        $content="views/barang/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if(empty($_POST['nama_minuman'])){
                $err['nama_minuman']="Nama Minuman Wajib";
            }
            if(!is_numeric($_POST['nomor'])){
                $err['nomor']="Nomor Minuman Wajib";
            }
            if(!is_numeric($_POST['id_ukuran'])){
                $err['id_ukuran']="Ukuran Minuman Wajib";
            }
            if(!isset($err)){
                $id_karyawan=$_SESSION['login']['id'];
                if(!empty($_POST['id_minuman'])){
                    //update
                    $sql="update minuman set nama_minuman='$_POST[nama_minuman]',nomor_minuman='$_POST[nomor]',jenis_minuman='$_POST[jenis_minuman]',id_ukuran='$_POST[id_ukuran]',id_karyawan=$id_karyawan where md5(id_minuman)='$_POST[id_minuman]'";
                }else{
                    //save
                    $sql = "INSERT INTO minuman (nama_minuman, nomor_minuman, jenis_minuman, id_ukuran,id_karyawan)
                    VALUES ('$_POST[nama_minuman]','$_POST[nomor]','$_POST[jenis_minuman]','$_POST[id_ukuran]',$id_karyawan)";
                }
            if ($conn->query($sql) === TRUE) {
                header('location: '.$con->site_url().'/admin/index.php?mod=toko');
            } else {
              $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
            }
        }
            
        }else{
            $err['msg']="Tidak Diizinkan";
        }
        if(isset($err)){
            $sql="select * from ref_ukuran";
        $ukuran=$conn->query($sql);
        $content="views/barang/tambah.php";
        include_once 'views/template.php';
        }
    break;
    case 'edit':
        $minuman="select * from minuman where md5(id_minuman)='$_GET[id]'";
        $minuman=$conn->query($minuman);
        $_POST=$minuman->fetch_assoc();
        $_POST['nomor']=$_POST['nomor_minuman'];
        $_POST['id_minuman']=md5($_POST['id_minuman']);
        //var_dump($minuman);
        $sql="select * from ref_ukuran";
        $ukuran=$conn->query($sql);
        $content="views/barang/tambah.php";
        include_once 'views/template.php';
    break;
    case 'delete';
        $minuman="delete from minuman where md5(id_minuman)='$_GET[id]'";
        $minuman=$conn->query($minuman);
        header('location: '.$con->site_url().'/admin/index.php?mod=toko');
    break;
    default:
        $sql ="Select * from minuman inner join ref_ukuran on ref_ukuran.id_ukuran=minuman.id_ukuran";
        $minuman=$conn->query($sql);
        $conn->close();
        $content="views/barang/tampil.php";
        include_once 'views/template.php';
}
?>