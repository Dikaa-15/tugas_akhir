<?php

require 'function.php';

$id = $_GET["id"];

if(hapus_admin($id) > 0){
    echo "
        <script type= 'text/javascript'>
        alert('Data berhasil dihapus')
        window.location = 'jenis_produk.php'
        </script>"
        ;
    }else{
        echo "
        <script type= 'text/javascript'>
        alert('Data gagal dihapus')
        window.location = 'jenis_produk.php'
        </script>"
        ;
    }

?>