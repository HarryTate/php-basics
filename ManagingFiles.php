<?php

//reads contents of file
//$file_contents = readfile("dictionary.txt");
  // print $file_contents;

//reads contents of file
//$file_to_read = "dictionary.txt";
//print file_get_contents($file_to_read);

//Sets pointer on the file telling PH to remember location of the file
/*
$file_contents = fopen("dictionary.txt","r");
print $file_contents;
fclose($file_contents);
*/
/*
$file_handle = fopen("dictionary.txt", "r");
//while !not at the end of the file
while (!feof($file_handle)){
  //get file contents
$line_of_text=fgets($file_handle);
//print variable
print $line_of_text."<BR>";

}
//close file
fclose($file_handle);
*/

$file_handle = fopen("testFile.txt","w");
$file_contents = "Some test text";

fwrite($file_handle,$file_contents);
fclose($file_handle);
print "file created and written to";

//working with csv files


$file_handle = fopen("widgets.csv", "r");

while (!feof($file_handle) ) {

$line_of_text = fgetcsv($file_handle, 1024);

print $line_of_text[0] . $line_of_text[1]. $line_of_text[2] . "<BR>";

}

fclose($file_handle);

//splitting a text document into an array using explode function
$file_handle = fopen("dictionary.txt", "rb");

while (!feof($file_handle) ) {

$line_of_text = fgets($file_handle);
$parts = explode('=', $line_of_text);
//using "=" to seperate into  different functions
//each line is the start of the array
print $parts[0]; . $parts[1]. "<BR>";

}

fclose($file_handle);


?>
