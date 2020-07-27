<div id="rimuovi-servizio">
<?php
    $products = getServices($db_data);

    while($row = $products->fetch_assoc()){
?>
    <div class="servizio">
        <span class="servizio-nome"><?= $row['nome']; ?></span>
        <span class="servizio-costo"><?= $row['costo']; ?></span>
        <form action="remove_service.php" method="post">
            <fieldset>
                <input type="hidden" value="<?= $row['id']; ?>" name="service_id"/>
                <input type="submit" value="Elimina servizio"/>
            </fieldset>
        </form>
    </div>
<?php
    }
?>
</div>