<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$first_name = $_POST['first_name'];
$first_name = strip_tags( $first_name, "<B>" );
echo $first_name;

}
?>
<html>
<body>

  <FORM Method = "POST" action ="htmlspecialcharacters.php">

  First Name: <INPUT TYPE = "text" name = "first_name" value ="<?=$first_name?>">


  <input type="submit" name="Submit" value="Submit">
  </FORM>

</body>
</html>
