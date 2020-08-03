<div id="filtri">
<form action="catalogo.php" method="get">
    <fieldset>
        <label for="tipo">Tipo</label>
        <select name="tipo" id="tipo">
            <option value="both">Tutti</option>
            <option value="strumento">Strumento</option>
            <option value="accessorio">Accessorio</option>
        </select>
        <label for="tipo">Ordina prezzo</label>
        <select name="prezzo" id="prezzo">
            <option value="ASC">Dal pi&ugrave; basso</option>
            <option value="DESC">Dal pi&ugrave; alto</option>
        </select>
        <input type="submit" value="Filtra"/>
    </fieldset>
</form>
</div>

<div id="lista-prodotti">
<?php
    include("db_connection.php");
    if(!isset($_GET['tipo']) || !isset($_GET['prezzo'])){
        echo "filtro tutto";
    $products = getProducts($db_data);  
    } else {
        $priceOrder = $_GET['prezzo'];
        echo $priceOrder;
        if($_GET['tipo'] == 'strumento'){
            echo "filtro strumento";
            $products = getInsturmentsProducts($db_data,$priceOrder);
        } 
        if($_GET['tipo'] == 'accessorio'){
            echo "filtro accessorio";
            $products = getAccessoriesProducts($db_data,$priceOrder);
        }
        if($_GET['tipo'] == "both"){
            echo "filtro tutto";
            $products = getProducts($db_data,$priceOrder);  
        }
    }
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