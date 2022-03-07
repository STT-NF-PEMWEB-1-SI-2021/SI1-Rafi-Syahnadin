<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-sm">
           <body>
    <div class="container" style="margin-top:2em;">
        <div class="row">
            <div class="col-sm" style="background-color:white; margin-right:1em; padding-top:1em;">
            <form class="form-horizontal" method="post" action="form_belanja.php" autocomplete="off">
                <h4>Belanja Online</h4>
                <hr>
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="customer">Customer</label> 
                    <div class="col-8">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Produk</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="kirim" type="submit" class="btn btn-success">Kirim</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="col-sm-4" style="background-color:white; padding-top:1em;">
                <table class="table">
                    <tr style="background-color: #337ab7; color: white;">
                        <td>Daftar Harga</td>
                    </tr>
                    <tr>
                        <td>TV: 4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas: 3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci: 3.800.000</td>
                    </tr>
                    <tr style="background-color: #337ab7; color: white;">
                        <td>Harga Dapat Berubah Setiap Saat!</td>
                    </tr>
                </table>
            </div>
        </div>


        <?php
    error_reporting(0);
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    if ($produk == 'TV') {
        $total = $jumlah * 4200000;
    }
    elseif ($produk == 'Kulkas') {
        $total = $jumlah * 3100000;
    }
    elseif ($produk == 'Mesin Cuci') {
        $total = $jumlah * 3800000;
    }

    echo "Nama Customer : " . $customer;
    echo "<br/> Produk Pilihan : " . $produk;
    echo "<br/> Jumlah Beli : " . $jumlah;
    echo "<br/> Total Belanja : Rp" . number_format($total);
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>