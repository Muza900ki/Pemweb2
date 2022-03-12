<?php
include'libfungsi.php';
$nilai= 90;
$nama= "Muzaki Abdullah Irsyad" ;
$keterangan= kelulusan($nilai);
$grade= grade($nilai) ;
$predikat= predikat() ;

echo "<br>nama : ".$nama;
echo "<br>nilai : ".$nilai;
echo "<br>keterangan : ".$keterangan;
echo "<br>grade : ".$grade;
echo "<br>predikat : ".$predikat;

?>