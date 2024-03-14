<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['warden_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>warden</span></h3>
      <h1>welcome <span><?php echo $_SESSION['warden_name'] ?></span></h1>
      <p>this is an Warden page</p>

      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>