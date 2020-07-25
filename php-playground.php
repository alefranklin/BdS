<?php
    $today = date("d-m-Y");
    $tom = strtotime("tomorrow", $today);

    //$today = date("d-m-Y", $tom);
    echo $today;
?>