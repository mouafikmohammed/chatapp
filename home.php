<?php
   session_start();

   if(isset($_SESSION['username'])) {
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

      <div class="p-2 w-400"></div>

</body>
</html>

<?php
   }else{
      header("Location: index.php");
      exit;
   }
?>