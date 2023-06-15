<?php
global $connection;
include 'db/connection.php';
$message = '';

if ($_SERVER['REQUEST_METHOD']=='POST'){
  if (isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if (empty($username) || empty($email) || empty($phone) || empty($password) || empty($cpassword)){
      $message = "Field Should Not Be Empty!";
    }else{
      if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
        $message = "Invalid User Name";
      } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email";
      } else if($password != $cpassword){
        $message = "Password do not match!";
      }else{
        $user_unique_id = rand(10000,99999);
        $password = password_hash($password,PASSWORD_DEFAULT);
        $signup_query = "INSERT INTO users (user_id,username,email,phone,password) VALUES ('$user_unique_id','$username','$email','$phone','$password')";
        $signup_query_result = mysqli_query($connection,$signup_query);
        if ($signup_query_result == 'true'){
          $message = "Succssfully Registered!";
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

<div id="register">
  <div class="register_overlay">
    <div class="form_padding">
      <div class="register_box">
        <h3 style="text-align: center;">Register</h3>
        <h5 style="text-align: center;color: red"><?php echo $message; ?></h5>
        <form action="register.php" method="POST">
          <div class="mb-3">
            <label  class="form-label">Name</label>
            <input type="text" class="form-control" name="username">
           
          </div>
          <div class="mb-3">
            <label  class="form-label">Email</label>
            <input type="email" class="form-control"  name="email">
           
          </div>
          <div class="mb-3">
            <label  class="form-label">Phone</label>
            <input type="number" class="form-control"  name="phone">
           
          </div>
          <div class="mb-3">
            <label  class="form-label">Password</label>
            <input type="password" class="form-control"  name="password">
           
          </div>
          <div class="mb-3">
            <label  class="form-label">Confirm Password</label>
            <input type="password" class="form-control"  name="cpassword">
           
          </div>
          <button type="submit" class="btn btn-primary w-100" name="register">Register</button>
          <div class="text-center">
            <a style="text-decoration: none;color: blue;" href="login.php" class="text-center">Already have an account?</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
 

 
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/custom.js"></script>

<script>

 // var  message = <?php //echo json_encode($message); ?>//;
 //
 //alert(message)


  </script>
</body>

</html>