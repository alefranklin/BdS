<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include_once("utility.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Home - La Bottega del Suono</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="Questo è il sito del negozio La Bottega del Suono.
        Qui potrai vedere e prenotare i servizi da noi offerti, i prodotti che abbiamo in catalogo
        e visualizzare i nostri contatti"/>
        <meta name="keywords" content="musica, strumenti musicali, chitarra"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="css/mobile.css"/>
        <link rel="stylesheet" href= "<?= $host_path."css/print.css"?>"  media="print"  type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
        <script src="js/utility.js" type="text/javascript"></script>
    </head>

    <body>
        <?php include("header.php"); ?>
        <div id="main">
            <div id="content">
                <p>
                    <h1>La Bottega del Suono</h1> 
                    <span>Dal 1985 il tuo punto di riferimento per l'acquisto e la manutenzione dei tuoi strumenti musicali. </span>
                    <span> Qui potrai vedere e prenotare i servizi da noi offerti, i prodotti che abbiamo in catalogo e visualizzare i nostri contatti. </span>
                </p>
                <img src="img/guitar_home.jpg" alt="Immagine di chitarra"/>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
