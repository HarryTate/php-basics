<?php


//explode
$text = "ID,1,2,3,4,5";
$text = explode(",",$text);

for($p = 0; $p < count($text); $p++){
print $text[$p]."<BR>";
}
//implode
$characters = array("Mickey","Donald","Minnie","Daffy");
$characters = implode(" ",$characters);
print $characters;


 ?>
