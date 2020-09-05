<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include_once("utility.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Prenota - La Bottega del Suono</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="Questo è il sito del negozio La Bottega del Suono.
        In questa pagina è possibile prenotare un appuntamento con un nostro esperto di musica."/>
        <meta name="keywords" content="musica, strumenti musicali, prenota servizio"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="css/mobile.css"/>
        <link rel="stylesheet" href="css/print.css" media="print" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&amp;display=swap" rel="stylesheet"/>
        <script src="js/checkInput.js" type="text/javascript"></script>
        <script src="js/utility.js" type="text/javascript"></script>
    </head>

    <body>
        <?php include("header.php"); ?>
        <div id="main">
            <div id="content">
                Pagina di prenotazione
                <?php include("book_form.php"); ?>
            </div>
        </div>

        <div id="prenota-print">
          <span> Per prendere appuntamento con uno dei nostri esperti ti preghiamo di conttattare il numero 555-9933902. </span>
          <span> Oppure puoi venirci a trovare in negozio all'indirizzo: Via Trieste, 63, 35121 Padova PD. </span>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
