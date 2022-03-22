<?php

// cara membuat class
class Mahasiswa{
    // cara membuat property (variable)
    public $nama;
    public $alamat;
    public $jurusan;

    // cara membuat method (fungsi)
    function CekNama(){
        echo "Nama saya adalah : " . $this->nama;
    }

    function __construct($datanama, $dataalamat, $datajurusan)
    {
        $this->nama = $datanama;
        $this->alamat = $dataalamat;
        $this->jurusan = $datajurusan;
    }
}

// cara membuat object
$mahasiswa1 = new Mahasiswa("Muzaki","Jakarta","Informatika");
$mahasiswa2 = new Mahasiswa("Angga","Jakarta","Mesin");

// cara akses property
echo $mahasiswa1->nama;
echo "<br>";

// Akses data mahasiswa2
echo $mahasiswa2->nama;

// cara akses method
$mahasiswa1->CekNama();

?>