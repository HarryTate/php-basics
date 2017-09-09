<html>
<head>
<title>Variables - Some Practice</title>
</head>
<body>

  <?php
  $break = "<br>";
if(isset($_POST['Submit1'])){

  $username = $_POST['username'];
  if($username == "letmein"){
  print('Welcome Back');

}else{

print('Youre not a member');

}
}
else {
  { $username= "";
  }
}
  ?>


  <p>Username</p>
  <FORM NAME ="form1" METHOD ="POST" ACTION = "forms.php">

  <INPUT TYPE = 'TEXT' Name ='username' VALUE="<?PHP print $username ; ?>">
  <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">

  </FORM>




</body>
</html>
