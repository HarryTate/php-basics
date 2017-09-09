<html>
<head>
<title>Radio Buttons</title>

<?php
$male_status = 'unchecked';
$female_status = 'unchecked';

if (isset($_POST['Submit1'])) {

$selected_radio = $_POST['gender'];
  if($selected_radio =='male'){

      $male_status = 'checked';

  }elseif ($selected_radio == 'female'){

$female_status='checked';

  }


}
?>
</head>
<body>

<Form name ="form1" Method ="POST" ACTION ="radioButton.php">
<Input type = 'Radio' Name ='gender' value= 'male'<?php print $male_status; ?>>Male
<Input type = 'Radio' Name ='gender' value= 'female' <?php print $female_status; ?>>Female
<P>
<Input type = "Submit" Name = "Submit1" Value = "Select a Radio Button">
</FORM>

</body>
</html>
