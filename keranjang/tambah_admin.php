<?php

require 'function.php';

if(isset($_POST["tambah"])) {
    if(tambah_admin($_POST) > 0) {
        echo "<script type='text/javascript'>
                alert('Yeyy, Admin Berhasil menambahkan data')
                window.location = 'jenis_produk.php'
              </script>";
    }else{
        echo "<script type='text/javascript'>
                alert('Noo, Admin Gagal menambahkan data')
                window.location = 'jenis_produk.php'
              </script>";
    }
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
</head>
<body>
    <div class="container mx-auto">

        <form class="tabel" action="" method="POST" id="form"  enctype="multipart/form-data">
            <h3 class="text-center pb-2">Form Tambah Admin</h3>
            <!-- <input type="hidden" name="id_produk"> -->
             <div class="mx-auto mt-5 text-center">
                 <label class="mb-3" for="">Foto </label><br>
                 <input type="file" name="foto" id="foto" size="50" required class="mx-5"><br><br>
             </div>
             <div class="text-center">
                 <label class="mb-3" for="">Nama</label><br>
                 <input type="text" name="sub_judul" id="sub_judul" required><br><br>
             </div>
             <div class="text-center">
                 <label class="mb-3" for="">Harga</label><br>
                 <input type="text" name="harga" id="harga" required><br><br>
             </div>
    
             <div class="text-center pb-1">

                 <button type="submit" name="tambah" class="btn btn-primary ">Tambah</button>
             </div>
        </form>
    </div>
</body>
</html>