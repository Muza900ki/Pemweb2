<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <form method="POST" action="">
      <div class="form-group row">
        <label for="customer" class="col-2 col-form-label">Customer</label> 
        <div class="col-2">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-child"></i>
              </div>
            </div> 
            <input id="customer" name="customer" placeholder="customer" type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-2">Pilih Produk</label> 
        <div class="col-2">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
            <label for="produk_0" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
            <label for="produk_1" class="custom-control-label">KULKAS</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-2 col-form-label">Jumlah</label> 
        <div class="col-2">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-dollar"></i>
              </div>
            </div> 
            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
          </div>
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-2 col-2">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
    <!-- PHP-nya -->
    <?php

    $_customer = $_POST ['customer'];
    $_produk = $_POST ['produk'];
    $_jumlah = $_POST ['jumlah'];

    echo "<br>customer :".$_customer;
    echo "<br>pilih produk :".$_produk;
    echo "<br>jumlah :".$_jumlah;

    ?>
    <!-- TUTUP -->
  </body>
</html>
