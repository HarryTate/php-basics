<?php


$today = date('d-m-y');

print $today."<BR>";






$time = date('G:i T');
print $time."<BR>";


$time = date('h:i:s a');
print $time;

/* day
Character	    Meaning                                            Example
d	            Day of the month	                                 05, 09, 14, 31
D	            The day in text format	                           Mon, Wed, Sun
j	            Like 'd', but without the zeros	                   5, 9, 14, 31
l             (lowercase L)	Like 'D' but not shortened	         Monday, Sunday
S	             Ordinal ending for the day of the month	         1st, 2nd, 20th
w             	Numeric value for day of week	0 is Sunday;       6 is Saturday
W	             Week number of the year	                         12th day of the year
z	             Numeric day of the year	                         0 to 365


*/

/*

Year
Character	            Meaning                     Example
L	                    Is it a Leap Year?	        1 if yes; 0 if no
Y	                    4 digit year value	        2006, 2007
y	                    2 digit year value	        06, 07

*/
?>
