<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <form method="GET" action="">
      <!-- Awal Form -->
      <filedset>
      <div class="form-group row">
        <label for="text" class="col-2 col-form-label">Nama Lengkap</label> 
        <div class="col-5">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-book-o"></i>
              </div>
            </div> 
            <input id="text" name="nama_lengkap" placeholder="nama_lengkap" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-2 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="matkul" id="radio_0" type="radio" required="required" class="custom-control-input" value="Dasar-dasar Pemrograman"> 
              <label for="radio_0" class="custom-control-label">Dasar-dasar Pemrograman</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="matkul" id="radio_1" type="radio" required="required" class="custom-control-input" value="Basis Data 1"> 
              <label for="radio_1" class="custom-control-label">Basis Data 1</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="matkul" id="radio_2" type="radio" required="required" class="custom-control-input" value="Pemorgramam Web 2"> 
              <label for="radio_2" class="custom-control-label">Pemrograman Web 2</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-radio">
              <input name="matkul" id="radio_3" type="radio" required="required" class="custom-control-input" value="Komunikasi Efektif"> 
              <label for="radio_3" class="custom-control-label">Komunikasi Efektif</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="text1" class="col-2 col-form-label">Nilai UTS</label> 
        <div class="col-2">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"></div>
            </div> 
            <input id="text1" name="nilai_uts" placeholder="nilai_uts" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-2 col-form-label">Nilai UAS</label> 
        <div class="col-2">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"></div>
            </div> 
            <input id="text2" name="nilai_uas" placeholder="nilai_uas" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-2 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-2">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text"></div>
            </div> 
            <input id="text3" name="nilai_tugas" placeholder="nilai_tugas" type="text" class="form-control">
          </div>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      </filedset>
      <!-- Penutup Form -->
    </form>
<!-- Awal PHP -->
<?php

$_nama_lengkap = $_GET ['nama_lengkap'];
$_mata_kuliah = $_GET ['matkul'];
$_nilai_uts = $_GET ['nilai_uts'];
$_nilai_uas = $_GET ['nilai_uas'];
$_nilai_tugas = $_GET ['nilai_tugas'];

echo "<br>Nama : ".$_nama_lengkap;
echo "<br>Mata Kuliah : ".$_mata_kuliah;
echo "<br>Nilai UTS : ".$_nilai_uts;
echo "<br>Nilai UAS : ".$_nilai_uas;
echo "<br>Nilai Tugas praktikum : ".$_nilai_tugas;

?>

  </body>
</html>
