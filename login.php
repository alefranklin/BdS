<?php
    include("db_connection.php");

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if($username == "" || !$username || !preg_match("/(^[a-zA-Z0-9_.-]{5,})+$/", $username)){
        header("Location: admin.php?errore=1");
    }

    if($password == "" || !$password || !preg_match("/(^[a-zA-Z0-9_.-]{5,})+$/", $password)){
        header("Location: admin.php?errore=2");
    }

    session_start();

    if($id = login($username,$password,$db_data)){
        $_SESSION['id'] = $id;
        header("Location: admin.php");
    } else {
        session_unset();
        header("Location: admin.php?errore=3");
    }
    
?>