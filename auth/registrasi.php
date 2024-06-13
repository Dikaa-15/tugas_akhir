<?php

require '..//keranjang/function.php';

 if( isset($_POST["register"])) {
    // header("Location: landing-page.php");
    // exit;
    
    if( registrasi($_POST) > 0 ) {
        echo "<script>
            alert ('user berhasil ditambahkan');
            </script>";
    }else{
        echo mysqli_error($conn);
    }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Registrasi</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <style>
        body{
                font-family: sans-serif;
                background: white;
        }
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .form{
            width: 40%;
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            margin-top: 50px;
            margin-left: 30%;
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        
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
       
        h3{
            position: relative;
            margin-left: 30px;
            font-size: 32px;
            font-weight: 600;
        }
        h3:before{
            content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
        }
        li input{
            padding-top: 20px;
        }
        #regis{
            margin-left: 20%;
            padding-right: 80px;
            padding-left: 80px;
            
        }
    </style> -->
    
</head>
<body>
    
    <form action="" method="POST" class="form">
        <h3>registrasi</h3>
    <ul style="list-style: none;">
        <li>
            <input  class="form-control mt-4" type="text" name="username" id="username" placeholder="Username">
        </li>
        <li>
            <input  class="form-control mt-4" type="password" name="password" id="password" placeholder="Password">
        </li>
        <li>
            <input class="form-control mt-4" type="password" name="password2" id="password2" placeholder="Confirm Password">
        </li>
        <li>
            <button type="submit" name="register" class="btn btn-success mt-4" id="regis">Register</button>
        </li>
        
    </ul>
    </form>


</body>
</html>