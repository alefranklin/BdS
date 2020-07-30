<?php
if(isset($_GET['diffGiorni'])){
    $diff = $_GET['diffGiorni'];
    $today = date("Y-m-d",strtotime("today + $diff days"));
    if($diff > 0 && $diff < 7){
        if($diff == 1){
            echo "<span class=\"day-back\"><a href=\"admin.php?action=0\">Torna a oggi</a></span>";
            echo "<span class=\"day-next\"><a href=\"admin.php?action=0&amp;diffGiorni=".($diff+1)."\">Giorno successivo</a></span>";
        } else {
            if($diff == 6){
                echo "<span class=\"day-back\"><a href=\"admin.php?action=0&amp;diffGiorni=".($diff-1)."\">Giorno precendente</a></span>";
            } else {
                echo "<span class=\"day-back\"><a href=\"admin.php?action=0&amp;diffGiorni=".($diff-1)."\">Giorno precendente</a></span>";
                echo "<span class=\"day-next\"><a href=\"admin.php?action=0&amp;diffGiorni=".($diff+1)."\">Giorno successivo</a></span>";
            }
        }
    } else {
        header("Location: admin.php?action=0");
    }
}  else {
    $today = date("Y-m-d");
    echo "<span class=\"day-next\"><a href=\"admin.php?action=0&amp;diffGiorni=1\">Giorno successivo</a></span>";

} 
?>



<div id="prenotazioni">
    <?php 
        
        $dayAppointments = getDayAppointments($today,$db_data);
        $hours = getHours();
    $row = "";

        for($i = 0; $i < count($hours['start']); $i++){
            if($row == ""){
                if($row = $dayAppointments->fetch_assoc()){
                    if(trimSeconds($row["ora"]) == $hours['start'][$i]){
                        $appuntamenti[$i] = $row;
                        $row = "";
                    } else {
                        $appuntamenti[$i] = 0;
                    }
                } else {
                    $appuntamenti[$i] = 0;
                }
            } else {
                if(trimSeconds($row["ora"]) == $hours['start'][$i]){
                    $appuntamenti[$i] = $row;
                    $row = "";
                } else {                
                    $appuntamenti[$i] = 0;
                }
            }
        }

        for($i = 0; $i < count($appuntamenti); $i ++){
            ?>
            <div class="riga-prenotazione">
                <div class="ora">
                    <span><?= $hours['start'][$i]."-".$hours['finish'][$i] ?></span>
                </div>
                <div class="dati-appuntamento">
                <?php
                if($appuntamenti[$i]){
                    $cliente = $appuntamenti[$i]["cliente"];
                    $servizi = $appuntamenti[$i]["servizi"];
                    ?>
                    <span class="cliente-appuntamento"><?= $cliente ?></span>
                    <span class="servizi-appuntamento"><?= $servizi ?></span>
                <?php
                } else {
                    ?>  
                    <span class="no-appuntamento">Nessun appuntamento</span>
                    <?php
                    
                }
                echo "</div>";
            echo "</div>";
        }
    ?>
</div>