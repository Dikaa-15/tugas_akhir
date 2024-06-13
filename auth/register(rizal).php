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
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="register.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Username" name="username">
      </div>
      <div class="input-box"> 
        <input type="password" placeholder="Create password" name="password">
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name="password2">
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" name="register">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="#">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>