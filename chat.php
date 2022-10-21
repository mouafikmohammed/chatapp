<?php
   session_start();

   if(isset($_SESSION['username'])) {
      # database connection file
      include 'app/db.conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Med App - Chat</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="img/logo.png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
   <div class="w-400 shadow p-4 rounded">
      <a href="home.php" class="fs-4 link-dark">&#8592;</a>

      <div class="d-flex align-items-center">
         <img src="uploads/user-default.jpg" class="w-15 rounded-circle">
         <h3 class="display-4 fs-sm m-2">
            Name<br>
            <div class="d-flex align-items-center" title="online">
               <div class="online"></div>
               <small class="d-block p-1">online</small>
            </div>
         </h3>
      </div>

      <div class="shadow p-4 rounded d-flex flex-column mt-2 h-50 chat-box" id="chatBox">
         <p class="rtext align-self-end border rounded p-2 mb-1">
            Hello, there
            <small class="d-block">13:00</small>
         </p>
         <p class="ltext border rounded p-2 mb-1">
            Hello
            <small class="d-block">13:00</small>
         </p>

         <p class="rtext align-self-end border rounded p-2 mb-1">
            Hello, there
            <small class="d-block">13:00</small>
         </p>
         <p class="ltext border rounded p-2 mb-1">
            Hello
            <small class="d-block">13:00</small>
         </p>

         <p class="rtext align-self-end border rounded p-2 mb-1">
            Hello, there
            <small class="d-block">13:00</small>
         </p>
         <p class="ltext border rounded p-2 mb-1">
            Hello
            <small class="d-block">13:00</small>
         </p>
      </div>
      <div class="input-group mb-3">
         <textarea cols="3" class="form-control"></textarea>
         <button class="btn btn-primary">
            <i class="fa fa-paper-plane"></i>
         </button>
      </div>
   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script>
      var scrollDown = function(){
         let chatBox = document.getElementByID('chatBox');
         chatBox.scrollTop = chatBox.scrollHeight;
      };
      scrollDown();
      $(document).ready(function(){

      });
   </script>
</body>
</html>

<?php
   }else{
      header("Location: index.php");
      exit;
   }
?>