<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="assets/styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <title>Aplikasi Forecasting</title>
   
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
   <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
   <link rel="stylesheet" href="style.css">

   <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="input.php">Input Penjualan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="tampil.php">Tampil Penjualan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="prediksi.php">Prediksi Penjualan</a>
    </li>
  </ul>
</nav>

<div class="content">
          <div class="animated fadeIn">
            <div class="row">
                  <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <strong class="card-title">Input Data</strong>
                          </div>
                          <div class="card-body">
                              <!-- Credit Card -->
                              <div id="pay-invoice">
                                  <div class="card-body">
                                      <div class="card-title">
                                          <h3 class="text-center">Input Prediksi Penjualan</h3>
                                      </div>
                                      <hr>
                                      <form action="simpan.php" method="post">
                                          <div class="form-group text-center">
                                          </div>
                                          <div class="form-group">
                                            <label for="bulan_pk" class="control-label mb-1">Bulan Penjualan</label>
                                            <select name="bulan_pk" id="bulan_pk" class="form-control">
                                              <?php
                                              $now = date('m');
                                              for ($i = $now; $i >= 1; $i--) {
                                                echo "<option value='".$i."'>".$i."</option>"
                                                ;
                                              }
                                              ?>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label>Jumlah Penjualan</label>
                                            <input id="jumlah_pk" name="jumlah_pk" type="number" class="form-control" value="">
                                          </div>
                                          <div class="form-actions form-group">
                                            <button type="submit" name="simpan" class="btn btn-primary btn-sm">Simpan</button>
                                          </div>
                                        </form>
                                      </hr>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                   
</body>
<html>