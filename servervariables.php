

<?php
//header("Location: http://www.homeandlearn.co.uk/");


//$referrer = $_SERVER['HTTP_REFERER'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$ipAddress = $_SERVER['REMOTE_ADDR'];

//print "Referrer = " . $referrer . "<BR>";
print "Browser = " . $browser . "<BR>";
print "IP Adress = " . $ipAddress;



foreach($_SERVER as $key_name => $key_value) {

print $key_name . " = " . $key_value . "<br>";

}




?>
