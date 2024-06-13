<?php

require 'function.php';

$id = $_GET ["id"];

$edit = query("SELECT * FROM product WHERE id_produk = '$id'")[0];


if(isset($_POST["edit"])) {
    if(edit($_POST) > 0) {
        echo "<script type='text/javascript'>
                 alert('Pesanan Berhasil diubah!')
                 window.location = 'admin.php';
              </script>";
    }else{
        echo "<script type='text/javascript'>
                 alert('Pesanan gagal...')
                 window.location = 'admin.php';
              </script>";
    }
}

require 'sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="bg-secondary-subtle">
    <form action="" method="POST" class="table table-stripped table-light mt-5" >
        <h1 class="bg-body-secondary text-success ">Edit pesanan</h1>
        <input type="hidden" name="id_produk" value="<?= $edit ["id_produk"]; ?>">
        <label for="" class="text-dark-emphasis mr-5">Jumlah</label>
        <input type="number" name="Jumlah" id="Jumlah" value="<?= $edit ["Jumlah"]; ?>"><br>    


        <button type="submit" name="edit">Ubah</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>