<?php
   session_start();

   if(isset($_SESSION['username'])) {
      # database connection file
      include 'app/db.conn.php';

      include 'app/helpers/user.php';

      # getting User data
      $user = getUser($_SESSION['username'],$conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Med App - Home</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="img/logo.png">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

      <div class="p-2 w-400 rounded shadow">
         <div>
            <div class="d-flex mb-3 p-3 bg-light justify-content-between align-items-center">
               <div class="d-flex align-items-center">
                  <img src="uploads/<?=$user['p_p']?>" class="w-25 rounded-circle" alt="profile pic">
                  <h3 class="fs-xs m-2"><?=$user['name']?></h3>
               </div>
               <a href="logout.php" class="btn btn-dark">Logout</a>
            </div>
         </div>
      </div>

</body>
</html>

<?php
   }else{
      header("Location: index.php");
      exit;
   }
?>