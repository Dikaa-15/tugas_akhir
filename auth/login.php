<?php
session_start();

require '..//keranjang/function.php';

// cek cookie
if( isset($_COOKIE['login'])) {
    if( $_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
    }
}

if( isset($_SESSION['login'])) {
    header("Location: ..//keranjang/tambah.php");
    exit;
}
 
if( isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])) {

            // set session
            $_SESSION["login"] = true;
            // header("Location: landing-page.php");
            // exit;

            // cek remember me
            if( isset($_POST['remember'])) {
                // buat cookie
                setcookie('login', 'true', time () + 60);
            }

            // $_SESSION["beli"] = true;
            // header("Location: detail copy2.php");
            // exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>

        .body{
                font-family: sans-serif;
                background: wheat;
                background: linear-gradient(90deg,rgb(231, 236, 232) 0%, rgb(188, 200, 189) 35%, rgb(145, 203, 146) 100% );
                
        }
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        form{
            width: 40%;
            background-color: white;
            padding: 50px;
            border-radius: 20px;
            margin-top: 50px;
        
        }
        
        .btn-success{
         width: 100%;
         border: none;
         border-radius: 50x;
        }
        
        .form-control{
            color: rgba(0,0,0,87);
            border-bottom-color: rgba(0,0,0,.42);
            box-shadow: none !important;
            border: none;
            border-bottom: 2px solid;
            border-radius: 4px 4px;
        }
        
        h4{
            font-size: 2rem !important;
            font-weight: 700;
            ;
        }
        
        .form-label{
            font-family: 800 sans-serif !important ;
            text-decoration: none;
        }
        
        #Sign-up:hover{
            color: blue;
            text-decoration: underline;
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
        .sign-up{
            margin-top: 40px;
            margin-left: 55px;
        }
    </style>
   
</head>
<body class="body">
    <div class="container-fluid">
        <form class="mx-auto" action="" method="POST" id="form">
            <div class="mb-3 mt-5">
            <h4 class="text-center mb-">User Login</h4>
                <ul style="list-style: none;">
                    <li>    
                        <label class="form-label mt-2" for="username">User name </label>
                        <input class="form-control" type="text" name="username" id="username">
                    </li>
                    <li>
                        <label for="password" class="form-label mt-2">Password </label>
                        <input class="form-control" type="password" name="password" id="password">
                    </li>
                    <?php if( isset($error)) : ?>
                <p style="color: red;">username or password incorrect!</p>
            <?php endif; ?>
                    <li>
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember" class="mt-2">Remember me:</label>
                    </li>
                    <li>
                        <button type="submit" name="login" class="btn btn-success mt-4">Login</button>
                    </li>
                    <p class="sign-up">haven't account? <a href="registrasi.php">Create your account</a></p>
                </ul>
            </div>
        </form>
    </div>
    <script>
  AOS.init();
</script>
</body>
</html>