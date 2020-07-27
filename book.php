<?php
    include_once("db_connection.php");
    $nome = trim($_POST['nome']);
    $cognome = trim($_POST['cognome']);
    $data = trim($_POST['data']);
    $ora = trim($_POST['ora']);
    $servizi = $_POST['servizi'];
    $email = trim($_POST['email']);

    if(!$nome || $nome == "" || !preg_match("/^[a-zA-Z0-9\x20]{4,40}$/", $nome)){
        header("Location: prenota.php?errore=4");
    }

    if(!$cognome || $cognome == "" || !preg_match("/^[a-zA-Z0-9\x20]{4,40}$/", $cognome)){
        header("Location: prenota.php?errore=13");
    }

    if(!$data || $data == "" || !preg_match("/^[\d]{4}[-][\d]{2}[-][\d]{2}$/", $data)){
        header("Location: prenota.php?errore=14");
    }

    if(!$ora || $ora == "" || !preg_match("/^([0-1]?[0-9]|2[0-3]):[0-5][0-9]$/", $ora)){
        header("Location: prenota.php?errore=15");
    }

    if(!$servizi || empty($servizi)){
        header("Location: prenota.php?errore=17");
    }

    if(count($servizi) > 4){
        header("Location: prenota.php?errore=18");
    }

    $regexEmail = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';

    if(!$email || $email == "" || !preg_match($regexEmail, $email)){
        header("Location: prenota.php?errore=16");
    }

    $cliente = $nome." ".$cognome;
    $ser = "";

    for($i = 0; $i < count($servizi); $i++){
        if($i == 0) $ser = $servizi[$i];
        else $ser = $ser.", ".$servizi[$i];
    }

    $ser = trim($ser);

    if(book($cliente,$data,$ora,$ser,$email,$db_data)){
        header("Location: prenota.php?messaggio=5");
    } else {
        header("Location: prenota.php?errore=19");
    }

?>