<?php 
include("../database/koneksi.php");

if(isset($_POST['signup_submit'])){
    $userEmail = htmlentities($_POST['userEmail']);
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    $telepone = htmlentities($_POST['telepone']);
    $userLevel = htmlentities($_POST['user_level']);
    $foto = "default.jfif";
    $oncreated = date("y-m-d H:i:s a");
    $onupdated = date("y-m-d H:i:s a");

    $d = array($userEmail,$username,$password,$telepone,$userLevel,$foto,$oncreated,$onupdated);
    $sql = "INSERT INTO m_user_data (userEmail,username,password,telepone,user_level,foto,onCreated,onUpdated) VALUES (?,?,?,?,?,?,?,?)";
    if($row = $koneksi->prepare($sql)){
        $row->execute($d);
        header("location:../view/index.php");
        exit();
    }else{
        header("location:../view/index.php");
        exit();
    }   
}
?>