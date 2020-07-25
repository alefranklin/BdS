<?php
    include_once("db_connection.php");
?>

<div id="form-prenotazione">
    <form method="post" action="book.php" onSubmit="return checkBookForm()">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"/>
        <label for="cognome">Cognome</label>
        <input type="text" id="cognome" name="cognome"/>
        <label for="data">Data</label>
        <select name="data" id="data">
        
        </select>
        <label for="ora">Ora</label>
        <select name="ora" id="ora">

        </select>
        <?php
            $services = getServices($db_data);
            
            if($services->num_rows != 0){
        ?> 
            <label for=""></label>
            <input type="checkbox" name="servizi[]" 
        <?php
            }
        ?>
        <label for="">Nome</label>
        <input type="nome" id="nome" name="nome"/>
    </form>
</div>