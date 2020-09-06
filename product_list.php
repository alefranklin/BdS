<div id="filtri">
<form action="catalogo.php" method="get">
    <fieldset>
        <legend>Filtri:</legend>
        <div class="form-element">
            <label for="tipo">Tipo</label>
            <select name="tipo" id="tipo">
                <option value="both">Tutti</option>
                <option value="strumento">Strumento</option>
                <option value="accessorio">Accessorio</option>
            </select>
        </div>
        <div class="form-element">
            <label for="prezzo">Ordina prezzo</label>
            <select name="prezzo" id="prezzo">
                <option value="ASC">Dal pi&ugrave; basso</option>
                <option value="DESC">Dal pi&ugrave; alto</option>
            </select>
        </div>
        <input type="submit" value="Filtra"/>
    </fieldset>
</form>
</div>

<div id="lista-prodotti">
<?php
    include("db_connection.php");
    if(!isset($_GET['tipo']) || !isset($_GET['prezzo'])){
        $products = getProducts($db_data);
    } else {
        $priceOrder = $_GET['prezzo'];
        if($_GET['tipo'] == 'strumento')    $products = getInsturmentsProducts($db_data,$priceOrder);
        if($_GET['tipo'] == 'accessorio')   $products = getAccessoriesProducts($db_data,$priceOrder);
        if($_GET['tipo'] == "both")         $products = getProducts($db_data,$priceOrder);
    }
    if($products->num_rows == 0 ){
        echo "<span>Nessun prodotto presente in catalogo</span>";
    }
    while($row = $products->fetch_assoc()){
?>
    <div class="prodotto">
        <span class="prodotto-nome"><?= $row['nome']; ?></span>
        <img class="prodotto-immagine" src="img/prodotti/<?= $row['img_path'];?>" alt="Immagine prodotto: <?= $row['nome'];?>"/>
        
        <!--<span class="prodotto-categoria"></*?= $row['categoria']; ?></span>-->
        <span class="prodotto-costo"><?= $row['costo']; ?> Euro</span>
    </div>
<?php
    }
?>
</div>
