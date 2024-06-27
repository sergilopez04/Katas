<?php
$dateString1 = '27/06/2024';
$dateString2 = '31/07/2024';
$difference = 0;

$date1 = DateTime::createFromFormat("d/m/Y", $dateString1);
//var_dump($date1);
$date2 = DateTime::createFromFormat('d/m/Y', $dateString2);

$interval = date_diff($date1, $date2);



?>