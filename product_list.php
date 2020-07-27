<div id="lista-prodotti">
<?php
    include("db_connection.php");
    $products = getProducts($db_data);

    while($row = $products->fetch_assoc()){
?>
    <div class="prodotto">
        <img src="img/prodotti/<?= $row['img_path'];?>" alt="Immagine prodotto: <?= $row['nome'];?>"/>
        <span class="prodotto-nome"><?= $row['nome']; ?></span>
        <span class="prodotto-categoria"><?= $row['categoria']; ?></span>
        <span class="prodotto-costo"><?= $row['costo']; ?></span>
    </div>
<?php
    }
?>
</div>