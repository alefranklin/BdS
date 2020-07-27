<div id="lista-servizi">
<?php
    include_once("db_connection.php");
    $products = getServices($db_data);

    while($row = $products->fetch_assoc()){
?>
    <div class="servizio">
        <span class="servizio-nome"><?= $row['nome']; ?></span>
        <span class="servizio-costo"><?= $row['costo']; ?></span>
    </div>
<?php
    }
?>
</div>