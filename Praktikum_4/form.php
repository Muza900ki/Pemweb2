<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <h1>Form Nilai Siswa</h1>
    <form method="POST" action="form.php">
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">NIM</label> 
        <div class="col-8">
          <input id="text" name="nim" placeholder="Masukan nim Anda" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Pilih MK</label> 
        <div class="col-8">
          <input id="text1" name="matkul" placeholder="Dasar-dasar pemrograman" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">NIlai</label> 
        <div class="col-8">
          <input id="text2" name="nilai" placeholder="Masukan Nilai UTS" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>

    <?php

    require_once 'class_nilaimahasiswa.php';
    if($_POST){
    $ns = new NilaiMahasiswa($_POST["nim"], $_POST["matkul"], $_POST["nilai"]);
    $keterangan = $ns->HitunglahNilai();
    $hasil1 = $ns->grade($keterangan);
    $hasil2 = $ns->predikat($keterangan);
    echo "NIM : " .$ns->nim;
    echo "<br>";
    echo "Matkul : " .$ns->matkul;
    echo "<br>";
    echo "Nilai : " .$ns->nilai;
    echo "<br>";
    echo "Status : " .$hasil1;
    echo "<br>";
    echo "Grade : ".$hasil2;
  }

    ?>

  </body>
</html>
