<?php
include("utility.php");
include("db_connection.php");

$week = getNextWeekFromTomorrow();

$appointments = getDayAppointments($week[0], $db_data);

if($appointments->num_rows){
    print_r($appointments);
}

?>