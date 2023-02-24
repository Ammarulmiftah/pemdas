<?php  
	echo("<h1>Tabel Logika</h1>");
$a = true;
$b = false;

echo "<table border='1'>";
echo "<tr><th>Input true</th><th>Input 2</th><th>AND</th><th>OR</th>";

$it = false && false;
echo "<tr><td>";
echo var_dump($it);
echo "</td>";

$i = false && false;
echo "<td>";
echo var_dump($i);
echo "</td>";

$c = $a && $b;
echo "<td>";
printf("%b",$c);
echo "</td>";

$c = $b || $b;
echo "<td>";
printf("%b",$c);
echo "</td>";

$it2 = false && false;
echo "<tr><td>";
echo var_dump($it2);
echo "</td>";

$i2 = true && true;
echo "<td>";
echo var_dump($i2);
echo "</td>";

$c = $a && $b;
echo "<td>";
printf("%b",$c);
echo "</td>";

$c = $b || $a;
echo "<td>";
printf("%b",$c);
echo "</td>";

$it3 = true && true;
echo "<tr><td>";
echo var_dump($it3);
echo "</td>";

$i3 = false && true;
echo "<td>";
echo var_dump($i3);
echo "</td>";

$c = $a && $b;
echo "<td>";
printf("%b",$c);
echo "</td>";

$c = $b || $a;
echo "<td>";
printf("%b",$c);
echo "</td>";

$it4 = true && true;
echo "<tr><td>";
echo var_dump($it4);
echo "</td>";

$i4 = true && true;
echo "<td>";
echo var_dump($i4);
echo "</td>";

$c = $a && $a;
echo "<td>";
printf("%b",$c);
echo "</td>";

$c = $a || $a;
echo "<td>";
printf("%b",$c);
echo "</td>";

echo"</table>";
?>