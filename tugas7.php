<?php  
	$hb = 8000;
	$hj = 7500;

	$kur = $hb - $hj;
	$bag = floor ($kur / 300) ;

	echo "Harga Beli = Rp8000";
	echo "<br>";
	echo "Harga jual = Rp7500";
	echo "<br>";
	echo "Keuntungan = Rp$kur";
	echo "<br>";
	echo "Berapa Jumlah kambing yang dibeli? Jawaban : $bag ekor";
?>