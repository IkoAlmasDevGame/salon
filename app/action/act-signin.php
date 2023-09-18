<?php 
include("../database/koneksi.php");
session_start();
if(isset($_POST['signin_submit'])){
    $userEmail = htmlentities($_POST['userEmail']);
    $password = htmlentities($_POST['password']);
    $onUpdated = date("y-m-d H:i:s a");

    if($userEmail == "" || $password == ""){
        header("location:../view/tampilan/signin.php?pesan=kosong");
        exit(0);
    }

    $data = "SELECT * FROM m_user_data WHERE userEmail='$userEmail' and password='$password' || username='$userEmail' and password='$password'";
    $cek = $koneksi->prepare($data);
    $cek->execute();
    $cekdata = $cek->rowCount();

    password_verify($password, PASSWORD_DEFAULT);
    if($cekdata > 0){
        $response = array($userEmail, $password, $onUpdated);
        $response['m_user_data'] = array();
        if($row = $cek->fetch()){
            if($row['user_level'] == "admin"){
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['foto'] = $row['foto'];
                $_SESSION['user_level'] = "admin";

                header("location:../view/dashboard/dashboard.php?pesan=berhasil");
            }else if($row['user_level'] == "kasir"){
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['foto'] = $row['foto'];                
                $_SESSION['user_level'] = "kasir";

                header("location:../view/dashboard/dashboard.php?pesan=berhasil");
            }
            $_SESSION['statusCek'] = true;
            $rowdata = $kon->query("UPDATE m_user_data SET onUpdated='$onUpdated' WHERE userEmail='$userEmail'");
            $rowdata2 = $kon->query("UPDATE m_user_data SET onUpdated='$onUpdated' WHERE username='$userEmail'");
            array_push($response['m_user_data'], $response);
        }
    }else{
        $_SESSION['statusCek'] = false;
        header("location:../view/tampilan/signin.php?pesan=gagal");
        exit(0);
    }
}

?>