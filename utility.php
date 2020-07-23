<?php
    include_once("errori.php");
    include_once("messaggi.php");
    //error_reporting(0);
    function isActive($page){
        $path = $_SERVER["PHP_SELF"];
        $path = explode("/",$path);
        if($page == end($path)) echo "inactive-link";
        else                    echo "active-link";
    }
?>