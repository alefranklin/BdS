<?php
    include_once("db_connection.php");
    $basedir = "img/prodotti/";

    if(isset($_POST['product_id'])){
        removeProduct($_POST['product_id'],$db_data);
        if(isset($_POST['img_path'])){
            $filename = $basedir.$_POST['img_path'];
            if(file_exists($filename)){
                unlink($filename);
            }
        }
        header("Location: admin.php?messaggio=2");
    } else {
        header("Location: admin.php?errore=10");
    }

?>