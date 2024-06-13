<?php

require 'function.php';

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script type='text/javascript'>
                 alert('Pesanan berhasil tambah!')
                 window.location = 'customer.php'
              </script>";
    } else {
        echo "<script type='text/javascript'>
                 alert('Pesanan Berhasil tambah!')
                 window.location = 'admin.php'
              </script>";
    }
}

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: ..//auth/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
    </style>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .tabel{
            width: 40%;
            background-color: white;
            padding: 10px;
            border-radius: 20px;
            margin-top: 40px;
            margin-left: 30%;
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
            margin-bottom: 50px;
    }
    @media (max-width: 576px) {
            form{
                width: 60%;
            }
        }
        
        @media (max-width: 768px) {
            form{
                width: 70%;
            }
        }
        @media (max-width: 1024px) {
            form{
                width: 70%;
            }
        }   
</style>

<body>
    <div class="container mx-auto">
          <div class="" >
        <form action="" method="post" class="tabel" >
            <h3 class="mt-3 py-3   text-center">Tambah Produk </h3>
            <div class="text-center">
            <label for="nama_produk">Nama Produk</label><br>
            <input type="text" name="NamaProduk" id="NamaProduk"  required><br><br>
            </div>
            <div class="text-center">
            <label for="jumlah">Jumlah</label><br>
            <input type="number" name="Jumlah" id="Jumlah"    required><br><br>
            </div>
            <div class="text-center">
            <label for="harga">Harga</label><br>
            <input type="text" name="Harga" id="Harga" required><br><br>
            </div>
            <div class="text-center">
            <label for="status">Status</label><br>
            <input type="text" name="status_pembayaran" id="status_pembayaran" required><br><br>
            </div>
            <div class="text-center">
            <label for="alamat">Alamat</label><br>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="alamat" id="alamat" required></textarea><br><br>
            </div class="text-center">
            <!-- <div class="text-center">
            <label for="total">Total</label><br>
            <input type="text" name="total" id="total" required><br><br>
            </div> -->
             <div class="text-center pb-1">
            <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        </div>
    </div>
</body>

</html>