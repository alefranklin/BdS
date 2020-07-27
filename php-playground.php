<?php
include("utility.php");
include("db_connection.php");

$week = getNextWeekFromTomorrow();

$appointments = getDayAppointments($week[0], $db_data);

while($row = $appointments->fetch_assoc()){
    print_r($row);
}

?>