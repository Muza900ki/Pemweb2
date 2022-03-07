<?php

$_nama_lengkap = $_POST ['nama_lengkap'];
$_mata_kuliah = $_POST ['matkul'];
$_nilai_uts = $_POST ['nilai_uts'];
$_nilai_uas = $_POST ['nilai_uas'];
$_nilai_tugas = $_POST ['nilai_tugas'];

// grade nilai aWal
$nilai=($_nilai_uts+$_nilai_uas+$_nilai_tugas)/3;

echo "<br>Nama : ".$_nama_lengkap;
echo "<br>Mata Kuliah : ".$_mata_kuliah;
echo "<br>Nilai UTS : ".$_nilai_uts;
echo "<br>Nilai UAS : ".$_nilai_uas;
echo "<br>Nilai Tugas praktikum : ".$_nilai_tugas;
echo "<br>Grade:" ;
if($nilai<36 and $nilai>=0) 
{

    $grade= "e";    
    echo $grade;

}
elseif($nilai>=36 and $nilai<=55)
{

    $grade= "d";
    echo $grade;

}
elseif($nilai>=56 and $nilai<=69)

{

    $grade= "c";
    echo $grade;

}

elseif($nilai>=70 and $nilai<=84)
{

    $grade= "b";
    echo $grade;

}

elseif($nilai>=85 and $nilai<=100)

{

    $grade= "a";
    echo $grade;
}

else{

    echo "i";

}
// Grade nilai akhir

// status awal
echo "<br>status:" ;
if($nilai>55)
{
echo "lulus" ;
}
else{
echo "tidak lulus";
}
// status akhir
// predikat nilai
echo "<br>predikat:";
switch ($grade) {
    case 'e':
        echo "sangat kurang";
        break;
    
        case 'd':
            echo "kurang";
            break;

            case 'c':
                echo "cukup";
                break;

                case 'b':
                    echo "memuaskan";
                    break;

                    case 'a':
                        echo "sangat memuaskan";
                        break;

                        case 'i':
                            echo "tidak ada";
                            break;

    default:
        # code...
        break;
}
// predikat akhir
?>