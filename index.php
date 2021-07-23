<?php
session_start();//session starts here

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Login - HMS</title>
  </head>
  <body>
    <div class="container ">
        <div class="row mt-lg-5 mt-md-5 mt-5">
            <div class=" d-flex justify-content-center align-self-center">
              <div class="">
                    <form class="box " role="form" method="post" action="index.php">
                        <h1>Login</h1>
                        <p class="text-muted"> Please enter your login and password!</p> 
                        <input type="text" name="email" placeholder="Email"> 
                        <input type="password" name="pass" placeholder="Password"> 
                        <a class="forgot" href="#">Forgot password?</a> <br />
                        <!-- <a id="myButton" type="submit" name="" value="Login" href="dashboard.html"> -->
                        <!-- <a class="btn" type="button" name="login" role="button" >Login</a> -->
                        <input class="btn" type="submit" value="Login" name="login" >

                    </form>
                  </div>

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('dashboard.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>