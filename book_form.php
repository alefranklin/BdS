<?php
    include_once("db_connection.php");
    $services = getServices($db_data);
    if($services->num_rows != 0){
?>

<div id="form-prenotazione">
    <form method="post" action="book.php" onsubmit="return checkBookForm()">
        <fieldset>
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome"/>
            <label for="cognome">Cognome</label>
            <input type="text" id="cognome" name="cognome"/>
            <label for="data">Data</label>
            <select name="data" id="data">
                <option value="ora">Ora</option>
            </select>
            <label for="ora">Ora</label>
            <select name="ora" id="ora">
                <option value="ora">Ora</option>
            </select>
            <?php
                    $i = 0;
                    while ($row = $services->fetch_assoc()){
                ?> 
            <label for="servizio<?= $i; ?>"><?= $row['nome'];?></label>
            <input type="checkbox" name="servizi[]" value="<?= $row['nome'];?>" id="servizio<?= $i; ?>"/> 
                <?php
                    $i += 1;
                    }
            ?>
            
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email"/>
        </fieldset>
    </form>
</div>
    <?php           } else {
                ?>
<span>Il venditore non offre alcun servizio al momento</span>
                <?php
            }
    ?>