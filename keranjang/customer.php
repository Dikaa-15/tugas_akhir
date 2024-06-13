<?php

require 'function.php';

$sepatu = query("SELECT * FROM product");

if(isset($_POST["cari"])) {
    $sepatu = cari($_POST["keyword"]);
}

// require 'sidebar.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
    <style>
        #footer{
            margin-top: 450px;
            bottom: 0px;
            display: flex;
            justify-content: center;
        }
    
        #sc{
            margin-right: 70px ;     
            padding: 5px 50px;
            border: 1px solid green;
        }
        .form{
            display: flex;
            justify-content: space-between;
            margin-top: 0px;

        }
        .search{
            border-radius: 10px;
            border: 1px solid  rgb(34 197 94);
        }
        .h1{
            text-align: ;
            font-size: 32px;
            color: black;
            text-decoration: underline;
            margin-bottom: 10px;
            margin-top: 10px;
            margin-left: 10px;
        }
        #insert{
            margin-right: 20px;
        
        }
    </style>
</head>

<body>
    <h1 class="h1"><u>Keranjang</u></h1>
    <nav class="mt-5 ml-3">
        <form action="" method="POST" class="form">
        <a href="tambah.php" class="btn btn-success px-4 py-2 mx-5 mb-2" id="insert">Tambah Pesanan</a>
        <div>
            <button type="submit" name="cari" class="btn btn-success" id="tombol-cari">Search </button>
            <input type="text" name="keyword" size="10" autofocus placeholder="Cari Pesanan " autocomplete="off" class="first-letter:" id="keyword">
        </div> 
        </form>
    </nav>
    <div class="row table table-responsive">
        
    <div class="container-fluid" id="container">

        <table class="table table-hover">
            <tr class="table table-dark">
                <th>#</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Status Pembayaran</th>
                <th>Alamat</th>
                <th>Opsi</th>
            </tr>
            <?php $nourut = 1; ?>
            <?php foreach($sepatu as $data) : ?>
                <tr>
                    <td><?= $nourut; ?></td>
                    <td><?= $data ["NamaProduk"]; ?></td>
                    <td><?= $data ["Jumlah"]; ?></td>
                    <td><?= $data ["Harga"]; ?></td>
                    <td style=""><?= $data ["status_pembayaran"]; ?></td>
                    <td><?= $data ["alamat"]; ?></td>
                    
                    <td>
                        <a href="batal.php?id=<?= $data["id_produk"]; ?>" onClick="return confirm ('Apakah anda yakin ingin membatalkan pesananan ini..')" class="btn btn-danger ml-2"><i class="bi bi-trash">Batal</i></a>
                    </td>
                </tr>
            <?php $nourut++ ;?>
            <?php endforeach; ?>
    
    
        </table>
    </div>

    </div>
    <!-- <footer>
            <section class="" id="footer">
                <p class="hover:text-green-500">© duxx.All Rights Reserved</p>
            </section>
    </footer> -->
    <!-- <script src="/dist/"></script> -->

    <?php require 'footer.php'; ?>


    <script src="/keranjang/script.js/"></script>
</body>

</html>