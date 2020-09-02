<div id="lista-servizi">
<?php
    include_once("db_connection.php");
    $products = getServices($db_data);

    while($row = $products->fetch_assoc()){
?>
    <div class="servizio">
        <h2 class="servizio-nome"><?= $row['nome']; ?></h2>
        <p class="servizio-desc"><?= $row['descrizione']; ?></p>
        <span class="servizio-costo"><?= $row['costo']; ?></span>
    </div>
<?php
    }
?>
</div>