<?php

$date = getdate();

print $date['mday'];



$post_date = .60;
$today = getdate();

$day_difference = $today['yday'] - $post_date;

Print "<BR>Days since last post = " . $day_difference;

 ?>
