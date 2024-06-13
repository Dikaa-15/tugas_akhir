<?php  

require 'function.php';

$jenis = query("SELECT * FROM item");

require 'sidebar.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">

        <a href="tambah_admin.php" class="btn btn-primary mt-5 mb-3 ml-3 ">Tambah</a>
    </div>
    <div class="container">
        <table class="table table-responsive border-dark table-hover text-center text-capitalize table-full" >
            <tr class="table-dark table-active text-upparcase text-white">
                <td>#</td>                
                <td>Foto Produk</td>                
                <td>Sub JUdul</td>                
                <td>Harga</td>                
                <td>Option</td>
            </tr>
        
                <?php $noUrut = 1; ?>
                <?php foreach ($jenis as $data) : ?>
                    <tr>
                        <td><?= $noUrut; ?></td>
                        <td><img src="../Image/<?= $data["foto"]; ?>" alt="" width="120"></td>
                        <td><?= $data["sub_judul"] ;?></td>
                        <td><?= number_format($data["harga"]);?></td>
                        <td>
                            <a href="edit_admin.php?id=<?= $data["id_produk"]; ?>" class="btn btn-primary ">Edit</a>
                            <a href="hapus_admin.php?id=<?= $data ["id_produk"]; ?>" class="btn btn-danger" onClick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td>
                    </tr>
                <?php $noUrut++; ?>
                <?php endforeach; ?>
            
        </table>
    </div>
</body>
</html>