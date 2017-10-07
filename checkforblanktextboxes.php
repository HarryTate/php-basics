<html>
<head>
<title>Check For Blank Text Boxes</title>
</head>
<body>
<?php
$first ="";
$second = "";

function display_error_message($user_text) {

if ($user_text === "") {
print "One or more blank text boxes detected";
}
else {
print "Text boxes OK";
}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

$first = trim($_POST['first']);
$second = trim($_POST['second']);

display_error_message($first);
display_error_message($second);
}

?>
</body>

<FORM Method = "POST" action ="checkforblanktextboxes.php">

First Name: <INPUT TYPE = "text" name = "first" value ="<?=$first?>">
Surnmae: <INPUT TYPE = "text" name = "second" value ="<?=$second?>">

<input type="submit" name="Submit" value="Submit">
</FORM>
</html>
