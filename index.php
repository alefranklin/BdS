<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include_once("utility.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>La Bottega del Suono - Home</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="Questo è il sito del negozio La Bottega del Suono.
        Qui potrai vedere e prenotare i servizi da noi offerti, i prodotti che abbiamo in catalogo
        e visualizzare i nostri contatti"/>
        <meta name="keywords" content="musica, strumenti musicali, chitarra"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="css/mobile.css"/>
        <link rel="stylesheet" href= "<?= $host_path."css/print.css"?>"  media="print"  type="text/css" />
    </head>

    <body>
        <?php include("header.php"); ?>
        <div id="main">
            <div>
                <p>
                    <h1>La Bottega del Suono</h1>
                    <span>Dal 1985 il tuo punto di riferimento per l'acquisto e la manutenzione dei tuoi strumenti musicali.</span>
                </p>
                <img src="img/guitar_home.jpg" alt="Immagine di chitarra"/>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>