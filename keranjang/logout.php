<?php

session_start();
unset($_SESSION["username"]);
session_destroy();

echo "<script type='text/javascript'>
        alert('Anda berhasil Logout')
        window.location = '/TUGAS AKHIR/landingpage/landing-page.php'
     </script>
";

?>