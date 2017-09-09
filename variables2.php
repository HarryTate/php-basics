<html>
<head>
<title>Variables - Some Practice</title>
</head>
<body>

  <?php
  //--------------TESTING VARIABLES------------
$break = "<br>";
  $first_number = 10 * 10;
  print ($first_number);
echo $break;
  $first_number = 10.5;
  $direct_text = 'My variable contains the value of ';

  print($direct_text .$first_number);
echo $break;
  $first_number=10.25;
  $second_number=20;
  $sum_total = $first_number + $second_number;
echo $sum_total;

echo $break;

$sum_total = $sum_total - 5.75;
echo $sum_total;
echo $break;
$accept = "You have been accepted";
$User_Name = "authentic";
if ($User_Name == "authentic"){
  echo $accept;
}elseif ($User_Name == "false") {
  echo "Incorrect Username";
}else{
echo "Error";

}
echo $break;

print ("<IMG SRC =image.jpg>");

echo $break;
$jake = 0;
$phil = 0;

if($phil == $jake){
echo "Jake and Phil are the same";

}elseif($phil > $jake){
echo "Jake and Phil are not the same";

}elseif($phil < $jake){

  echo "Phil is less than Jake";
} else{

  "error";
}

echo $break;

$switch_result = 1;
$switch_op = 1;

switch($switch_result && $switch_op){
  case 0:

  echo 'switch result equals 0';
  break;

  case 1:
  echo "switch result equals 1";
  break;

  default:
  echo 'error';
}
  ?>

</body>
</html>
