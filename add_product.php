<?php
    include_once("db_connection.php");
    $nome = trim($_POST['nome']);
    $cat = trim($_POST['categoria']);
    $costo = trim($_POST['costo']);
    $img = $_FILES['immagine'];
    $target_dir = "img/prodotti/";
    //controllo regex nome
    if(!$nome || $nome == "" || !preg_match("/^[a-zA-Z0-9\x20]{4,40}$/", $nome)){
        header("Location: admin.php?action=3&errore=4");
    }
    //controllo regex categoria
    if(!$cat || $cat == "" || !preg_match("/strumento|accessorio/", $cat)){
        header("Location: admin.php?action=3&errore=5");
    }
    //controllo regex costo
    if(!$costo || $costo == "" || !preg_match("/^([0-9]+)(\.[0-9]{1,2})?$/", $costo)){
        header("Location: admin.php?action=3&errore=6");
    }

    //controllo file immagine con estensione corretta
    $possibleExt = ['image/png', 'image/jpg', 'image/jpeg'];
    if(!$img || $img == "" || $img['error'] != 0 || !in_array($img['type'],$possibleExt)){ 
        header("Location: admin.php#?action=3&errore=7");
    }

    $target_file = $target_dir.basename($img['name']);
    //controllo se il file che si cerca di caricare é giá presente nel server
    if(file_exists($target_file)){
        header("Location: admin.php?action=3&errore=8");
    }


    if(uploadProduct($nome,$cat,$costo,$img['name'],$db_data)){
        if(move_uploaded_file($img['tmp_name'],$target_file)){
            header("Location: admin.php?action=3&messaggio=1");
        } 
    } else {
        header("Location: admin.php?action=3&errore=9");
    }
?>