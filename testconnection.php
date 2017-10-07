<?PHP
require '../../configure.php';


$db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS );

print "Server found" . "<BR>";


$database = "addressbook";

//return true or false
$db_found = mysqli_select_db( $db_handle, $database );

if ($db_found) {

print "Database found";

}

else {

print "Database not found";

}

//closes the connection
mysqli_close( $db_handle );

?>
