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

<br>

<div class="content">
  <div class="animated fadeIn">
    <div class="rows">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Tampil Data</strong>
          </div>
          <div class="card-body">
            <div id="tampil">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Bulan</th>
                    <th scope="col">Jumlah Penjualan</th>
                    <th scope="col">X</th>
                    <th scope="col">Y</th>
                    <th scope="col">XX</th>
                    <th scope="col">XY</th>
                  </tr>
                </thead>
                  <tbody>
                  <?php
                    $con=mysqli_connect("localhost","root","","forecasting");
                        if (mysqli_connect_errno()) {
                            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
                        };
                      $sql = mysqli_query($con, "SELECT * FROM tb_pk") or die (mysqli_error($con));
                    //  if (mysqli_num_error($sql) > 0) {
                        // code...
                        {
                        $x = 0;
                        $jumlah_x = 0;
                        $jumlah_y = 0;
                        $jumlah_xx = 0;
                        $jumlah_xy = 0;
                        while ($data = mysqli_fetch_array($sql)) {
                              $jumlah_x += $x;
                              $jumlah_y += $data['jumlah_pk'];
                              $jumlah_xx += ($x * $x);
                              $jumlah_xy += ($x * $data['jumlah_pk']);
                            ?>
                            <tr>
                              <td><?=$x+1;?>.</td>
                              <td><?=$data['bulan_pk'];?></td>
                              <td align="left"><?=$data['jumlah_pk'];?></td>
                              <td align="left"><?=$x;?></td>
                              <td align="left"><?=$data['jumlah_pk'];?></td>
                              <td align="left"><?=$x * $x;?></td>
                              <td align="left"><?=$x * $data['jumlah_pk'];?></td>
                            </tr>
                            <?php
                            $x++;
                          }
                          ?>
                          <tr>
                            <td colspan="2">Jumlah</td>
                            <td></td>
                            <td><?=$jumlah_x;?></td>
                            <td><?=$jumlah_y;?></td>
                            <td><?=$jumlah_xx;?></td>
                            <td><?=$jumlah_xy;?></td>
                          </tr>
                          <tr>
                            <td colspan="2">Rata2</td>
                            <td></td>
                            <td>
                              <?php
                              $rata2_x = $jumlah_x / $x;
                              echo $rata2_x;
                              ?>
                            </td>
                            <td>
                              <?php
                              $rata2_y = $jumlah_y / $x;
                              echo $rata2_y;
                              ?>
                            </td>
                            <td colspan="2"></td>
                          </tr>
                          <tr>
                            <td colspan="2">b</td>
                            <td colspan="6">
                              <?php
                              $b1 = ($jumlah_xy - (($jumlah_x * $jumlah_y) / $x)) / ($jumlah_xx - ($jumlah_x * $jumlah_x) / $x);
                              echo $b1;
                              ?>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">a</td>
                              <td colspan="6">
                                <?php
                                $b0 = $rata2_y - $b1 * $rata2_x;
                                echo $b0;
                                ?>
                              </td>
                            </tr>
                            <?php
                          }
                          ?>
                        </tbody>
              </table>
              <div>
                Rumus Regresi Linier :<br>
                <?php
                $y = $b0." + ".$b1." x";
                echo $y;
                ?>
              </div>
              <?php
              if (isset($_POST['prediksi'])) {
                $periode_pk = $_POST['bulan_pk'];
                $thn = ($x - 1) + $periode_pk;
                $prediksi = $b0 + ($b1 * $thn);
                ?>
                <div>
                  Prediksi Penjualan untuk <?=$periode_pk;?> bulan berikutnya adalah <?=$prediksi;?>
                </div>
                <?php
              }
              ?>
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