<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include_once("utility.php");
include_once("db_connection.php");
session_start();?>
<html>
    <head>
        <title>La Bottega del Suono - Login Admin </title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <script src="js/checkInput.js"></script>
    </head>

    <body>
        <div id="main">
            Questa é la pagina di login amministratore
            
            <?php
                if(isset($_GET['errore'])){
                    echo "<p id=\"errore-get\">".$errori[$_GET['errore']]."</p>";
                }
                if(isset($_GET['messaggio'])){
                    echo "<p id=\"messaggio-get\">".$messaggi[$_GET['messaggio']]."</p>";
                }
                if(!isset($_SESSION['id'])){      
                    include("login_form.html");
                } else {
                    include("logged_admin.php");
                }
            ?>
        </div>

        
    </body>
</html>