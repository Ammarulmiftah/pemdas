<?php

echo("<h1> Ammarul Miftah</h1>");
echo("<h1> XII RPL A </h1>");
echo("<h1> Daftar Menu </h1>");

$array = [
    array("1", "Cireng", "Rp 1000"),
    array("2", "Es Doger", "Rp 15000"),
    array("3", "Es Milo", "Rp 16000"),
    array("4", "Es Kepal", "Rp 500"),
    array("5", "Pisang Coklat", "Rp 1000"),
];

echo "<table border='1'";
echo "<tr><th>No</th><th>Nama</th><th>Harga</th></tr>";
 
foreach ($array as $rows => $row) {
    echo "<tr>";

foreach ($row as $col => $cell) {
    echo "<td>" . $cell . "</td>";
    }
}
echo "</tr></table>";
?>
