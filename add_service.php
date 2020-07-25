<?php
    include_once("db_connection.php");
    $nome = trim($_POST['nome']);
    $costo = trim($_POST['costo']);
    $descrizione = trim($_POST['descrizione']);

    if(!$nome || $nome == "" || !preg_match("/^[a-zA-Z0-9\x20]{4,40}$/", $nome)){
        header("Location: admin.php?action=1&errore=4");
    }

    //controllo regex costo
    if(!$costo || $costo == "" || !preg_match("/^\d+(\.\d{1,2})?$/", $costo)){
        header("Location: admin.php?action=1&errore=6");
    }

    if(!$descrizione || $descrizione == "" || !preg_match("/^[a-zA-Z0-9\x20]{20,200}$/", $descrizione)){
        header("Location: admin.php?action=1&errore=10");
    }



    if(uploadService($nome,$costo,$descrizione,$db_data)){
        header("Location: admin.php?action=1&messaggio=3");
    } else {
        header("Location: admin.php?action=1&errore=9");
    }
?>