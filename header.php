<?php
$index = "index.php";
$servizi = "servizi.php";
$catalogo = "catalogo.php";
$prenota = "prenota.php";
$about = "about.php";
?>

<div id="salta-menu"><a href="#main">Vai al contenuto principale</a></div>
<div id="menu" class="navbar">
    <div class="titolo-nav">
        <img src="img/logo.png" alt="Logo del sito"/>
    </div>
    <div>
        <ul>
            <li><a class="<?php isActive($index)?>" href="<?= $index?>">Home</a></li>
            <li><a class="<?php isActive($servizi)?>" href="<?= $servizi?>">Servizi</a></li>
            <li><a class="<?php isActive($catalogo)?>" href="<?= $catalogo?>">Catalogo</a></li>
            <li><a class="<?php isActive($prenota)?>" href="<?= $prenota?>">Prenota</a></li>
            <li><a class="<?php isActive($about)?>" href="<?= $about?>">About</a></li>
        </ul>
    </div>
</div>

<a href="php-playground.php">PLAYGROUND</a>