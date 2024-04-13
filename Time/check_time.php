<?php

date_default_timezone_set('ASIA/KOLKATA'); // Set your timezone

$hour = (int)date('H');

$minute = (int)date('i');

$openHour = 21; // Set your opening hour
$openMinute = 20; // Set your opening minute

$closeHour = 21; // Set your closing hour

$closeMinute = 21; // Set your closing minute

if (

($hour > $openHour || ($hour === $openHour && $minute >= $openMinute)) &&

($hour < $closeHour || ($hour === $closeHour && $minute < $closeMinute))

) {

echo 'ACCESS_GRANTED';

} else {

echo 'ACCESS_DENIED';

}

?>