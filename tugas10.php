<?php  
	echo "<h1>Operator String</h1>";

	$a = "Ayo";
	$b = "Bersama";
	$c = "Belajar";
	$d = "Niomic";
	$has = $a." ".$c;
	$his = $b." ".$d;
	$ja = $has." ".$his;

	echo "<table border='1'>";
	echo "<tr><th>Input 1</th><th>Input 2</th><th>Hasil</th></tr>";
	echo "<br>";
	echo "<tr><td>$a</td><td>$c</td><td>$has</td></tr>";
	echo "<td>$b</td><td>$d</td><td>$his</td>";
	echo "</table>";
	echo "<br>";
	echo "Gabungan : $ja :)";

?>