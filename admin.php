<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include_once("utility.php");
include_once("db_connection.php");
session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>La Bottega del Suono - Admin Panel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="css/mobile.css"/>
        <link rel="stylesheet" href= "css/print.css"  media="print"  type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&amp;display=swap" rel="stylesheet"/>
        <script src="js/checkInput.js" type="text/javascript"></script>
    </head>

    <body>
        <div id="main">
            <div id="content">
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
        </div>


    </body>
</html>
