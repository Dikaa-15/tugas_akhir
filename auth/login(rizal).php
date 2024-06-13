<!-- 
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
    header("Location: ..//TUGAS AKHIR/detail/index.php");
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
?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body{
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

</style>

<body>
    <div class="container-fluid"> 
    <form class="mx-auto" action="" method="POST">
            <div class="mb-3 mt-5 ">
                <h4 class="text-center mb-">User Login</h4>
                    <label class="form-label mt-2" >User name </label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="">
           </div>
                <div class="mb-3">
                    <label class="form-label mt-2" >Password</label>
                    <input type="password" class="form-control"  type="password" name="password" id="password" placeholder="">
               </div>
                <?php if (isset($error)) : ?>
                    <p>username or password salah!</p>
                <?php endif; ?>
                    <div>
                        <input type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="Remember me" name="remember">Remember me</label>
                    </div>
                    <div>
                        <button type="button" name="login" class="btn btn-success">Login</button>
                    </div>
                    <div>
                        <button type="button"  class="btn btn-white" id="Sign-up">Sign-up</button>
                    </div>
                </div>
        </form>
</div>
    <script>
        AOS.init();
    </script>
</body>

</html>
