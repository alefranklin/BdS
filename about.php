<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include_once("utility.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>About - La Bottega del Suono</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="Questo è il sito del negozio La Bottega del Suono.
        Qui sono presenti le informazioni riguardanti la nostra attività."/>
        <meta name="keywords" content="musica, strumenti musicali, chitarra"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="css/mobile.css"/>
        <link rel="stylesheet" href= "<?= $host_path."css/print.css"?>"  media="print"  type="text/css" />
        <script src="js/map.js" type="text/javascript"></script>
    </head>
    
    <body>
        <?php include("header.php"); ?>
        <div id="main">
            <div id="content">
                <div id="location">
                    <h2>Dove siamo</h2>
                    <p>I nostri esperti di musica saranno lieti di accoglierti nel nostro negozio in Via Trieste, 63, 35121 Padova PD.</p>
                    <div id="map">
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeWzjBUxll39wiFmOA6nQRkpJVsDuPEPA&amp;callback=createMap" type="text/javascript"></script>
                    </div>
                </div>

                <div id="contacts">
                    <h2>Contattaci</h2>
                    <p>Puoi anche chiamarci al numero <span><a href="tel:5559933902">555-9933902</a></span>. La tua chiamata sar&agrave; gestita pi&ugrave; velocemente possibile.</p>
                </div>

                <div id="our-team">
                    <h2>I nostri esperti di musica</h2>
                    <div class="team-member">
                        <img src="img/membri/sbaggio.jpg" alt="Foto di Stefano Baggio"/>
                        <span>Stefano Baggio</span>
                    </div>
                    <div class="team-member">
                        <img src="img/membri/afranchin.png" alt="Foto di Alessandro Franchin"/>
                        <span>Alessandro Franchin</span>
                    </div>
                    <div class="team-member">
                        <img src="img/membri/manpagotto.jpg" alt="Foto di Manuel Pagotto"/>
                        <span>Manuel Pagotto</span>
                    </div>
                    <div class="team-member">
                        <img src="img/membri/matpagotto.jpg" alt="Foto di Matteo Pagotto"/>
                        <span>Matteo Pagotto</span>
                    </div>
                </div>    
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>