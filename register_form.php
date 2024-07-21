<?php

$conn = mysqli_connect('localhost','id20271901_j02','','id20271901_ss_j02');

if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);


   $select = " SELECT * FROM tbl_account WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $name = mysqli_real_escape_string($conn, $_POST['name']);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO tbl_account(name, email, password, user_type) VALUES('$name','$email','$pass','user')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style2.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="cpassword" required placeholder="Confirm your password">
      
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>Already have an account? <a href="index.php">Login now</a></p>
   </form>

</div>

</body>
</html>