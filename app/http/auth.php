<?php
session_start();

# check if username, password submitted
if(isset($_POST['username']) &&
   isset($_POST['password'])){

   # database connection file
   include '../db.conn.php';
   
   # get data from POST request and store them in var
   $password = $_POST['password'];
   $username = $_POST['username'];

   # simple form Validation
   if(empty($username)){
      # error message
      $em = "Username is required";

      # redirect to 'index.php' and passing error message
      header("Location: ../../index.php?error=$em");
   }else if(empty($password)) {
      # error message
      $em = "Password is required";

      # redirect to 'index.php' indexnd passing error message
      header("Location: ../../index.php?error=$em");
   }else {
      $sql = "SELECT * FROM users WHERE username=?";
      $stmt = $conn->prepare($sql);
      $stmt->execute([$username]);

      # if the username is exit
      if($stmt->rowCount() === 1){
         # fetching user data
         $user = $stmt->fetch();

         #if both username's are strictly equal
         if($user['username']=== $username){

            # verifying the encrypted password
            if(password_verify($password, $user['password'])){
               # successfuly logged in
               # creating the SESSION
               $_SESSION['username'] = $user['username'];
               $_SESSION['name'] = $user['name'];
               $_SESSION['user_id'] = $user['user_id'];

               # redirect to 'home.php'
               header("Location: ../../home.php");

            }else {
               # error message
               $em = "Incorect Username or password";

               # redirect to 'index.php' indexnd passing error message
               header("Location: ../../index.php?error=$em");
            }
         }

      }else {
         # error message
         $em = "Incorect Username or password";

         # redirect to 'index.php' indexnd passing error message
         header("Location: ../../index.php?error=$em");
      }
   }

}else {
	header("Location: ../../index.php");
   exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ERROR</title>
</head>
<body>
   <!--if user enter same data but with upper charactar-->
   <h1>back Login page <a href="../../index.php">HERE</a></h1>
</body>
</html>

