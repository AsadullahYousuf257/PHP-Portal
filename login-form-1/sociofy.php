<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    include 'db_conn.php';

    $login = "false";

    $username = $_POST["username"];
    $password = $_POST["password"];


        $sql = "Select * from users where username='$username' AND password='$password'";
        $result = mysqli_query($conn , $sql);
        $num = mysqli_num_rows($result);

        if($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: home.php");
        }
    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href=".\assets\css\stylesheet.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/cropped-icon1-01.webp">

    <script src="assets/js/index.js"></script>
    <link rel="stylesheet" href="./assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="./assets/bootstrap-4.4.1-dist/js/bootstrap.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Log In</title>
  </head>
  <body style="background-image:url(http://localhost/login%20form/assets/img/BG.png);background-repeat:no-repeat;background-size:cover">
<style>
/* img.main-logo-img {
    display: block;
    margin-left: auto;
    margin-right: auto;
} */
.container-form {
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    border: 5px solid #000;
    border-radius: 62px;
    padding: 56px 95px 56px 95px;
}
input[type="text"], input[type="password"] {
    padding: 10px;
    width: 451px;
    background: #FFFFFF;
    box-shadow: 0px 5.82411px 5.82411px 3.88274px rgb(109 199 255 / 25%);
    border-radius: 15.531px;
    border: 1px solid #000;
    margin-left: 10px;
}
</style>

</div>
    <div class="container">
    <div class="img-container">
<img src="assets/img/brands-logos/Logos-04.png" alt="" class="main-logo-img" width="340px" style="text-align:center ">
  </div>
<div class="container-form">
<!-- <h1>Login</h1> -->
        <form action="login.php" method="post">
  <div class="mb-3">
    <!-- <label for="username" class="form-label">Username</label> -->
    <input type="text" class="form-control" id="username" placeholder="Username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <!-- <label for="password" class="form-label">Password</label> -->
    <input type="password" class="form-control" placeholder="Password" id="password" name="password">
    <!-- <div id="emailHelp" class="form-text">Make sure type the same password  .</div> -->

  <!-- </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div> -->
 
  <button type="submit" class="btn btn-primary log-in" style="width:207px;background: linear-gradient(111.51deg, #000000 21.54%, #484543 90.56%);
border-radius: 8px;">Log In</button>
</form>

    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <div class="container powered" >
                 <h1>Powered by SOCIOFY</h1>
                 </div>
  </body>
</html>