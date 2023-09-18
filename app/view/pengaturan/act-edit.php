<?php 
include("../../database/koneksi.php");

if(isset($_POST['submit'])){
    $id = htmlentities($_POST['id']);
    $userEmail = htmlentities($_POST['userEmail']);
    $username = htmlentities($_POST['username']);
    $password = htmlentities($_POST['password']);
    $telepone = htmlentities($_POST['telepone']);
    $user_level = htmlentities($_POST['user_level']);

    $ekstensi_diperbolehkan_foto = array('png', 'jpg', 'jpeg', 'jfif');
    $foto = $_FILES['foto']['name'];
    $x_foto = explode('.', $foto);
    $ekstensi_foto = strtolower(end($x_foto));
    $ukuran_foto = $_FILES['foto']['size'];
    $file_tmp_foto = $_FILES['foto']['tmp_name'];

    if(in_array($ekstensi_foto, $ekstensi_diperbolehkan_foto) === true){
        if($ukuran_foto < 10440070){
            move_uploaded_file($file_tmp_foto, "../../../assets/image/profile/" . $foto);
            $sql = "UPDATE m_user_data SET userEmail=?, username=?, password=?, telepone=?, user_level=?, foto=? WHERE id=?";
            if($row = $koneksi->prepare($sql)){
                $row->execute(array($userEmail,$username,$password,$telepone,$user_level,$foto,$id));
                header("location:../dashboard/dashboard.php?pesan=edit");
            }else{
                header("location:../dashboard/dashboard.php?pesan=gagal");
            }
        }else{
            echo "GAGAL MENGUPLOAD FILE FOTO";
        }
    }else{
        echo "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
    }
}else{
    header("location:../dashboard/dashboard.php");
}

?>