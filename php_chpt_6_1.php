<?php

$y=1 ;
for (; $y<=20; $y++) {
	echo "<tr> \n";
	for($x=1; $x <= 20; $x++) {
		echo "<td style=\"border: 1px solid #000; width:  25px;
			text-align:center;\">";
		echo ($x * $y);
		echo "</td> \n";
	}
}
echo "</table>";
?>
/**
* Created by PhpStorm.
* User: Jason Griffin
* Date: 4/11/2015
* Time: 12:49 PM
*/