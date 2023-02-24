<?php 
    $hj = 15000;
    $hk = 2000;
    $dus = 6;
    $j = 5;
    $tj = 2;

    $kal = $j * $dus;
    $lag = $kal * $hj;
    $kall = $tj * $hk;
    $jum = $lag + $kall;

    echo "Harga Jambu = Rp 15000 / Kg";
    echo "<br>";
    echo "Harga Kardus = Rp 2000 / pcs";
    echo "<br>";
    echo "Total Penjualan (Dus dan Jambu) = Rp $jum"
?>