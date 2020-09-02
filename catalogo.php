<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include_once("utility.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>La Bottega del Suono - Catalogo</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="description" content="Questo è il sito del negozio La Bottega del Suono.
        Qui potrai vedere i prodotti che abbiamo in catalogo."/>
        <meta name="keywords" content="musica, strumenti musicali, chitarra"/>
        <link rel="stylesheet" type="text/css" href="css/main.css"/>
        <link rel="stylesheet" type="text/css" href="css/mobile.css"/>
        <link rel="stylesheet" href= "<?= $host_path."css/print.css"?>"  media="print"  type="text/css" />
    </head>

    <body>
        <?php include("header.php"); ?>
        <div id="main">
            <?php include("product_list.php"); ?>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>