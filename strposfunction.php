<?php

//agent = $_SERVER["HTTP_USER_AGENT"];
//print $agent;


$full_name = "bill gates";
$letter_position = strpos( $full_name, "l" );
print $letter_position;

$agent = $_SERVER['HTTP_USER_AGENT'];

if ( strpos( strtoupper($agent), 'CHROME')){

print "Google Chrome";

}
else if (strpos(strtoupper($agent), 'FIREFOX')) {

print "Firefox";

}
else {

print $agent;

}


 ?>
