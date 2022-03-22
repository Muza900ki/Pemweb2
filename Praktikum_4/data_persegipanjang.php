<?php

require_once "class_persegipanjang.php";

$PersegiPanjang1 = new Persegipanjang( 10,2 );
$PersegiPanjang2 = new Persegipanjang( 4,2 );
echo "<br/>Luas Persegi panjang I ".$PersegiPanjang1->getLuas();
echo "<br>Luas Persegi panjang II ".$PersegiPanjang2->getLuas();
echo "<br>Keliling Persegi panjang I ".$PersegiPanjang1->getKeliling();
echo "<br>Keliling Persegi panjang II ".$PersegiPanjang2->getKeliling();


?>