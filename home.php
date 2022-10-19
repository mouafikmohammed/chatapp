<?php
   session_start();

   if(isset($_SESSION['username'])) {
      # database connection file
      include 'app/db.conn.php';
      include 'app/helpers/user.php';
      include 'app/helpers/conversations.php';
      include 'app/helpers/timeAgo.php';

      # getting User data
      $user = getUser($_SESSION['username'],$conn);

      # Getting User conversations
      $conversations = getConversation($user['user_id'], $conn);

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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <div class="input-group mb-3">
               <input type="text" placeholder="Search..." class="form-control">
               <button class="btn btn-primary">
                  <i class="fa fa-search"></i>
               </button>
            </div>

            <ul class="list-group mvh-50 overflow-auto">
               <?php if (!empty($conversations)) { ?>
                  <?php foreach($conversations as $conversation){ ?>
                     <li class="list-group-item">
                        <a href="chat.php?user=<?=$conversation['username']?>" class="d-flex justify-content-between align-items-center p-2">
                           <div class="d-flex align-items-center">
                              <img src="uploads/<?=$conversation['p_p']?>" class="w-10 rounded-circle">
                              <h3 class="fs-xs m-2"><?=$conversation['name']?></h3>
                           </div>
                           <?php if(last_seen($conversation['last_seen']) == "Active") {?>
                              <div title="online">
                                 <div class="online"></div>
                              </div>
                           <?php } ?>
                        </a>
                     </li>
                  <?php } ?>
               <?php }else { ?>
                  <div class="alert alert-info text-center">
                     <li class="fa fa-comments d-block fs-big"></li>
                     no messages yet, Start the conversation
                  </div>
               <?php } ?>
            </ul>

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