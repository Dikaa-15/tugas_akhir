<?php 

 require 'function.php';

 $id = $_GET["id"];
 $editSiswa = query("SELECT * FROM item WHERE id_produk = '$id'")[0];

 if(isset($_POST["edit"])){
    if(edit_admin($_POST) > 0){ 
        echo "
        <script type='text/javascript'>
            alert('Yay! data berhasil diedit')
            window.location = 'jenis_produk.php'
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Yhaa.. data gagal diedit')
            window.location = 'jenis_produk.php'
        </script>
    ";
    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa SMK Jakarta Pusat 1</title>
</head>
<body>
    <h1>Tambah Siswa SMK Jakarta Pusat 1</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_produk" value="<?= $editSiswa["id_produk"]; ?>">
        <label for="">Foto</label><br />
        <input type="file" name="foto" value="<?= $editSiswa["foto"]; ?>"><br /> <br />

        <label for="">Sub Judul</label><br />
        <input type="text" name="sub_judul" value="<?= $editSiswa["sub_judul"]; ?>"><br /> <br />

        <label for="">harga</label><br />
        <input type="text" name="harga" value="<?= $editSiswa["harga"]; ?>"><br /> <br />
        <button type="submit" name="edit">Edit</button>
    </form>
</body>
</html>