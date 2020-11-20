<?php
include("koneksi.php");
?>
<!doctype html>
<html lang="en">
  <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="userTransaksi.css">
        <script src="https://kit.fontawesome.com/d503721210.js" crossorigin="anonymous"></script>

        <title>TRANSAKSI</title>
  </head>
  <body>
        <!-- Awal Navbar -->

            <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
                <a class="navbar-brand" href="#">HALAMAN USER | SHOWROOM</a>

                    <form class="form-inline my-2 my-lg-0 ml-auto">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="icon ml-4">
                        <h5>
                            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Pesan Masuk"></i>
                            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
                            <a href="Arya.php"><i class="fas fa-user-lock mr-3 text-dark" data-toggle="tooltip" title="Login Admin"></i></a>
                        </h5>
                    </div>
                </div>
            </nav>

            <div class="row no-gutters mt-5">
                <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
                    <ul class="nav flex-column ml-3 mb-5">
                        <li class="nav-item">
                            <a class="nav-link active text-white" href="user.php"><i class="fas fa-home mr-2"></i>Home</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="userMobil.php"><i class="fas fa-car mr-2"></i>Form Mobil</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="userPembeli.php"><i class="fas fa-user mr-2"></i>Form Pembeli</a><hr class="bg-secondary">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="userTransaksi.php"><i class="fas fa-receipt mr-2"></i>Form Transaksi</a><hr class="bg-secondary">
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 p-5 pt-2">
                    <h3><i class="fas fa-receipt mr-2"></i>TRANSAKSI<hr></h3>

                    <!-- Awal Tabel -->

                    <div class="card-body">
                        <form method="POST" action="simpantransaksi.php">
                            <div class="form-group">
                                <label>Nama</label>
                                <select class="form-control" name="nama">
                                    <option value="">Pilih Nama Anda</option>
                                    <?php
                                    $namapembeli = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                                    while ($pembeli = mysqli_fetch_array($namapembeli)){
                                        echo '<option value ="'.$pembeli['id_pembeli'].'">'.$pembeli['nama'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>No.Telepon</label>
                                <select class="form-control" name="telepon">
                                    <option value="">Pilih No.Telepon Anda</option>
                                    <?php
                                    $notelepon = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                                    while ($telepon = mysqli_fetch_array($notelepon)){
                                        echo '<option value ="'.$telepon['id_pembeli'].'">'.$telepon['tlpn'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <select class="form-control" name="alamat">
                                    <option value="">Pilih Alamat Anda</option>
                                    <?php
                                    $alamatpembeli = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                                    while ($alamat = mysqli_fetch_array($alamatpembeli)){
                                        echo '<option value ="'.$alamat['id_pembeli'].'">'.$alamat['alamat'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jumlah</label>
                                <select class="form-control" name="jumlah">
                                    <option value="">Pilih Jumlah Mobil Anda</option>
                                    <?php
                                    $jumlahmobil = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                                    while ($jumlah = mysqli_fetch_array($jumlahmobil)){
                                        echo '<option value ="'.$jumlah['id_pembeli'].'">'.$jumlah['jumlah'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Merk</label>
                                <select class="form-control" name="merk">
                                    <option value="">Pilih Merk Mobil Anda</option>
                                    <?php
                                    $merkmobil = mysqli_query($database, "SELECT * FROM pembeli") or die (mysqli_error($database));
                                    while ($merk = mysqli_fetch_array($merkmobil)){
                                        echo '<option value ="'.$merk['id_pembeli'].'">'.$merk['merk'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                <select class="form-control" name="harga">
                                    <option value="">Pilih Harga Mobil Anda</option>
                                    <?php
                                    $hargamobil = mysqli_query($database, "SELECT * FROM mobil") or die (mysqli_error($database));
                                    while ($harga = mysqli_fetch_array($hargamobil)){
                                        echo '<option value ="'.$harga['id_mobil'].'">'.$harga['harga'].'</option>';
                                    }
                                    ?>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
                            <button type="reset" class="btn btn-danger">Batal</button>
                        </form>
                    </div>

                    <!-- Akhir Tabel -->
                </div>
            </div>

        <!-- Akhir Navbar -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <script type="text/javascript" src="userTransaksi.js"></script>
  </body>
</html>