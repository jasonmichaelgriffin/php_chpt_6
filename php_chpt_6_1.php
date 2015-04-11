<?php
print "<table style=\"border: 1px solid black;\"> \n";
$y=1 ;
for (; $y<=20; $y++) {
	print "<tr> \n";
	for($x=1; $x <= 20; $x++) {
		print "<td style=\"border: 1px solid #000; width:  25px;
			text-align:center;\">";
		print ($x * $y);
		print "</td> \n";
	}
}
print "</table>";
?>
/**
* Created by PhpStorm.
* User: Jason Griffin
* Date: 4/11/2015
* Time: 12:49 PM
*/