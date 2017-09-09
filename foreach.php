<?php

$full_name = array( );
           //key name   // key number
$full_name["Harry"] = "Tate";
$full_name["Liam"] = "Mason";
$full_name["Roger"] = "Waters";
$full_name["Richard"] = "Wright";
//sorts into alphabetical by key number
ksort($full_name);

//sorts by key normalizer_is_normalized

asort($full_name);


foreach($full_name as $first_name => $last_name){

  print "Key = " . $first_name . " Value = " . $last_name . "<BR>";


}
//gets random key value
$random_key = array_rand($full_name, 1);
print $random_key;
 ?>
