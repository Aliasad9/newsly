<?php

function getFormattedDateTime($strDatetime){

    $date = new DateTime($strDatetime);
    return date_format($date, "M j, Y");
}

?>