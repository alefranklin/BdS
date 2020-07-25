<?php
    include_once("db_connection.php");

    if(isset($_POST['service_id'])){
        removeService($_POST['service_id'],$db_data);
        header("Location: admin.php?action=2&messaggio=4");
    } else {
        header("Location: admin.php?action=2&errore=12");
    }

?>