<?php
$belum = 0;
$sudah = 1;
echo "$belum  $sudah";

for($a = 0; $a<20; $a++){

    $has = $sudah + $belum;
    echo "$has ";

    $belum = $sudah;
    $sudah = $has;
}
?>