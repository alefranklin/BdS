<?php
    include_once("db_connection.php");
    $services = getServices($db_data);
    if($services->num_rows != 0) {
?>

      <div id="form-prenotazione">
          <form method="post" action="book.php" onsubmit="return checkBookForm()">
              <fieldset>
                <legend>Dati personali:</legend>
                <div class="form-element">
                  <label for="nome">Nome</label>
                  <input type="text" id="nome" name="nome"/>
                </div>

                <div class="form-element">
                  <label for="cognome">Cognome</label>
                  <input type="text" id="cognome" name="cognome"/>
                </div>

                <div class="form-element">
                  <label for="email">E-mail</label>
                  <input type="text" id="email" name="email"/>
                </div>
              </fieldset>
              <fieldset>
                <legend>Prenotazione:</legend>

                <div class="form-element">
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
                </div>

                <div class="form-element">
                  <label for="ora">Ora</label>
                  <select name="ora" id="ora">
                  <?php
                      $hours = getHours();
                      for($i = 0; $i < 8; $i++){?>
                      <option value="<?= $hours['start'][$i]?>"><?= $hours['start'][$i]?></option>
                      <?php } ?>
                  </select>
                </div>
              </fieldset>
              <fieldset>
                <legend>Servizi:</legend>
                <div class="form-element">
                  <?php
                    $i = 0;
                    while ($row = $services->fetch_assoc()){
                  ?>
                  <div class="form-element">
                    <label for="servizio<?= $i; ?>"><?= $row['nome'];?></label>
                    <input type="checkbox" name="servizi[]" value="<?= $row['nome'];?>" id="servizio<?= $i; ?>"/>
                  </div>
                  <?php
                    $i += 1;
                    }
                  ?>
                </div>
              </fieldset>
              <fieldset class="no-border">
                <input type="submit" value="Prenota"/>
              </fieldset>
          </form>
          <p id="errori-book"></p>
      </div>
<?php 
    } else {
?>
      <span>Il venditore non offre alcun servizio al momento</span>
<?php
    }
?>
