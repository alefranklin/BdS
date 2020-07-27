<?php
    include_once("errori.php");
    include_once("messaggi.php");
    //error_reporting(0);
    function isActive($page){
        $path = $_SERVER["PHP_SELF"];
        $path = explode("/",$path);
        if($page == end($path)) echo "inactive-link";
        else                    echo "active-link";
    }

    function getNextWeekFromTomorrow(){
        $today = date("Y-m-d",strtotime("tomorrow"));
        for($i = 0; $i < 7; $i++){
            $week[$i] = date('Y-m-d', strtotime($today." + $i days"));            
        }
        return $week;
    }

    function getHours(){
        $startTime = date("H:i",60*60*7);
    
        for($i = 0; $i < 4; $i ++){
            $hours['start'][$i] = date("H:i", strtotime($startTime." + $i hours"));
            $hours['finish'][$i] = date("H:i", strtotime($startTime." + ".($i+1)." hours"));
        }
    
        $startTime = date("H:i",60*60*13);
    
        for($i = 0; $i < 4; $i ++){
            $hours['start'][$i+4] = date("H:i", strtotime($startTime." + $i hours"));
            $hours['finish'][$i+4] = date("H:i", strtotime($startTime." + ".($i+1)." hours"));
        }
    
        return $hours;
    }

    function checkDayAvailability($day, $db_data){
        $dayApp = getDayAppointments($day, $db_data);

        if($dayApp->num_rows == 8) return false;        //se in un giorno ci sono 8 appuntamenti (giorno pieno) ritorno falso
        else                       return true;         //altrimenti vero
    }
?>