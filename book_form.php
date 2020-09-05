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
                <?php
                $week = getNextWeekFromTomorrow();
                for($i = 0; $i < count($week); $i++){
                // Inserisce il giorno nella select e lo disabilita se in quel giorno ci sono già 8 prenotazioni (giorno pieno)
                ?>
                <option value="<?= $week[$i]?>" <?= checkDayAvailability($week[$i],$db_data) ? "" : "disabled" ?>><?= $week[$i]?></option>
                <?php } ?>
            </select>
            <label for="ora">Ora</label>
            <select name="ora" id="ora">
            <?php
                $hours = getHours();
                for($i = 0; $i < 8; $i++){?>
                <option value="<?= $hours['start'][$i]?>"><?= $hours['start'][$i]?></option>
                <?php } ?>
            </select>
            <span>Seleziona i servizi che desideri prenotare (massimo 4)</span>
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
            <input type="submit" value="Prenota"/>
        </fieldset>
    </form>
    <p id="errori-book"></p>
</div>
    <?php           } else {
                ?>
<span>Il venditore non offre alcun servizio al momento</span>
                <?php
            }
    ?>
