<?php

# check if username, password, name submitted

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['name'])){

   # get data from POST request and store them in var
   $name = $_POST['name'];
   $password = $_POST['password'];
   $username = $_POST['username'];

   # making URL data format
   $data = 'name='.$name.'&username='.$username;

   # simple form validation
   if(empty($name)){
      # error message
      $em = "Name is required";

      # redirect to 'signup.php' and passing error message
      header("Location: ../../signup.php?error=$em");
      exit;
   }else if(empty($username)){
      # error message
      $em = "Username is required";

      # redirect to 'signup.php' and passing error message
      header("Location: ../../signup.php?error=$em");
   }else if(empty($password)){
      # error message
      $em = "Password is required";

      # redirect to 'signup.php' and passing error message
      header("Location: ../../signup.php?error=$em");
   }else {
      echo "good!";
   }

}else {
   header("Location: ../../signup.php");
}
