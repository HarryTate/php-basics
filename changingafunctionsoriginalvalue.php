<?PHP

$Variable_Value = 10;

print "Before the function call = " . $Variable_Value . "<BR>";

example($Variable_Value);

print "After the function call = " . $Variable_Value;
//using '&' allows changes to be made to the orignal variable and not a copy that the function makes
function example(&$Variable_Value) {

$Variable_Value = $Variable_Value + 10;
print "Inside of the function = " . $Variable_Value . "<BR>";

}

?>
