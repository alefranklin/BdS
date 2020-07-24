<div id="rimuovi-prodotto">
<?php
    $products = getProducts($db_data);

    while($row = $products->fetch_assoc()){
?>
    <div class="prodotto">
        <img src="img/prodotti/<?= $row['img_path'];?>" alt="Immagine prodotto: <?= $row['nome'];?>"/>
        <span class="prodotto-nome"><?= $row['nome']; ?></span>
        <span class="prodotto-categoria"><?= $row['categoria']; ?></span>
        <span class="prodotto-costo"><?= $row['costo']; ?></span>
        <form action="remove_product.php" method="post">
            <input type="hidden" value="<?= $row['id']; ?>" name="product_id"/>
            <input type="hidden" value="<?= $row['img_path']; ?>" name="img_path"/>
            <input type="submit" value="Elimina prodotto"/>
        </form>
    </div>
<?php
    }
?>
</div>