<?php
if(isset($_GET['diffGiorni'])){
    $diff = $_GET['diffGiorni'];
    $today = date("Y-m-d",strtotime("today + $diff days"));
    if($diff > 0 && $diff < 7){
        if($diff == 1){
            echo "<span><a href=\"admin.php?action=0\">Torna a oggi</a></span>";
            echo "<span><a href=\"admin.php?action=0&diffGiorni=".($diff+1)."\">Giorno successivo</a></span>";
        } else {
            if($diff == 6){
                echo "<span><a href=\"admin.php?action=0&diffGiorni=".($diff-1)."\">Giorno precendente</a></span>";
            } else {
                echo "<span><a href=\"admin.php?action=0&diffGiorni=".($diff-1)."\">Giorno precendente</a></span>";
                echo "<span><a href=\"admin.php?action=0&diffGiorni=".($diff+1)."\">Giorno successivo</a></span>";
            }
        }
    } else {
        header("Location: admin.php?action=0");
    }
}  else {
    $today = date("Y-m-d");
    echo "<span><a href=\"admin.php?action=0&diffGiorni=1\">Giorno successivo</a></span>";

} 
?>



<div id="prenotazioni">
    <?php 
        
        $dayAppointments = getDayAppointments($today,$db_data);
        $hours = getHours();
    $row = "";


        for($i = 0; $i < count($hours['start']); $i++){
            if($row == ""){
                $row = $dayAppointments->fetch_assoc();
            }
            print_r($row);
            if($row){
                if(trimSeconds($row["ora"]) == $hours['start'][$i]){
                    $appuntamenti[$i] = $row;
                    $row = "";
                } else {
                    $appuntamenti[$i] = "";
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
                if($appuntamenti[$i] != ""){
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