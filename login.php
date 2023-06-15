<?php
global $connection;
session_start();
include 'db/connection.php';
$message = '';

if ($_SERVER['REQUEST_METHOD']=='POST'){
  if (isset($_POST['login'])){
    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];
    if (empty($login_email) || empty($login_password)){
      $message = "Please Fill-up All Field!!";
    }else{
      if (!filter_var($login_email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email";
      }else{
        $login_sql = "SELECT * FROM users WHERE email= '$login_email'";
        $login_result = mysqli_query($connection,$login_sql);
        $userdata = mysqli_fetch_assoc($login_result);
        $hashpass = $userdata['password'];


        if ($login_result && password_verify($login_password,$hashpass)){

          if($login_email == $userdata['email']){
            $_SESSION['username'] = $userdata['username'];
            $_SESSION['user_id'] = $userdata['user_id'];
            header('Location:home.php');
          }else{
            $message = "Email Mismatch!";
          }
        }else{
          $message = "Password Can't Verify!!";
        }

      }
    }
  }
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/google.font.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/auth.css">
  <!-- <link rel="stylesheet" href="css/uikit.min.css"> -->

</head>

<body>

<div id="login">
  <div class="login_overlay">
    <div class="form_padding">
      <div class="login_box">
        <h3 style="text-align: center;">Login</h3>
        <h5 style="text-align: center;color: red"><?php echo $message; ?></h5>
        <form action="login.php" method="post">
         
          <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control" name="login_email">
           
          </div>
       
          <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control" name="login_password">
           
          </div>
     
          <button type="submit" class="btn btn-success w-100" name="login">Login</button>
          <div class="text-center">
            <a  style="text-decoration: none;color: blue;" href="register.php" class="text-center">Create An Account...</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
 

 
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>



  </script>
</body>

</html>


<?php

mysqli_close($connection);
?>