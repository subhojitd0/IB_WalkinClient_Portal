<?php

require '../../api/config.php';
session_start();


        $_SESSION['user']='';
        header("Location: ../login.php");



?>