<?php
$index = "index.php";
$servizi = "servizi.php";
$catalogo = "catalogo.php";
$prenota = "prenota.php";
$about = "about.php";
?>

<div id="salta-menu" class="accessibility-hide">
    <a href="#main" onfocus="toggleAccessibilityTop()" onblur="toggleAccessibilityTop()">Vai al contenuto principale</a>
</div>
<div id="menu" class="navbar">
    <div class="titolo-nav">
        <img src="img/logo.png" alt="Logo del sito"/>
    </div>
    <div id="actual_menu" class="topnav hideMenu">
        <ul>
            <li><a class="<?php isActive($index)?>" href="<?= $index?>">Home</a></li>
            <li><a class="<?php isActive($servizi)?>" href="<?= $servizi?>">Servizi</a></li>
            <li><a class="<?php isActive($catalogo)?>" href="<?= $catalogo?>">Catalogo</a></li>
            <li><a class="<?php isActive($prenota)?>" href="<?= $prenota?>">Prenota</a></li>
            <li><a class="<?php isActive($about)?>" href="<?= $about?>">About</a></li>
        </ul>
    </div>
    <div id="menuShowMobile" onclick="toggleMenu()">
        <a class="fa fa-bars"><i></i></a>
    </div>
</div>
