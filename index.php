<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Med App - Login</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
   <div class="w-400 p-5 shadow rounded">
      <form method="post" action="app/http/auth.php">

         <div class="d-flex 
                     justify-content-center 
                     align-items-center 
                     flex-colum">
            <img src="img/logo.png" 
                 class="w-25">
            <h3 class="display-4 fs-1 
                       text-center">
                       Login</h3>
         </div>

         <?php if(isset($_GET['success'])) { ?>
         <div class="alert alert-success" role="alert">
            <?php echo htmlspecialchars($_GET['success']);?>
         </div>
         <?php } ?>

         <div class="mb-3">
            <label class="form-label">User name</label>
            <input type="text" class="form-control">
         </div>
         <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control">
         </div>
         <button type="submit" class="btn btn-primary">Login</button>
         <a href="signup.php">Sign Up</a>
      </form>
   </div>
</body>
</html>