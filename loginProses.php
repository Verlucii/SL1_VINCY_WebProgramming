<?php
    session_start(); 
    $Username = $_SESSION['UsernameSession'];
    $Password1 = $_SESSION['Password1Session'];
    $Password2 = $_SESSION['Password2Session'];

    if(isset($Username)&&isset($Password1)&&isset($Password2)){
        if($_POST['Username']==$Username&&($_POST['Password']==$Password1||$_POST['Password']==$Password2)){
            header('location: home.php');
        }else{
            header('location: login.php');
        }
    }
?>