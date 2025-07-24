<?php

require '../../api/config.php';
session_start();

$id=$_POST['username'];
$pass=md5($_POST['password']);

    $sql="SELECT * from `ib_user` where userid='$id' and password='$pass'";
    $usertype = mysqli_query($conn,$sql);

	if($user=mysqli_fetch_array($usertype))
    {
        $_SESSION['user']=$user[0];
        header("Location: ../index.php");
    }
    else
    {
        header("Location: ../login.php");
    }



?>