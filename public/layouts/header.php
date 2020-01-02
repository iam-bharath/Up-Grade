<?php 
require_once("../includes/initialize.php"); 

$brand = new Brand();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Latest compiled and minified CSS -->
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheets/main.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><b>Up-Grade 🎯</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="editorial.php">Editorial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="e-lib.php">E-Lib</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="employment.php">Recruits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="topic_list.php">Forum</a>
          </li>
             <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Exams
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="capf.php"><b>Capf</b></a>
          <a class="dropdown-item" href="cds.php"><b>Cds</b></a>
         

          <div class="dropdown-divider"></div>
        </div>
      </li>
    </ul>
     
          
          &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  
         <!--  <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="35">
        </a>
      </li>
    </ul> -->
          
          <?php if($session->is_logged_in()) { ?>
                <?php 
                    // Find the logged in user
                    $user = User::find_by_id($session->user_id);
                ?>
                        
                        

                       <a href="account.php?id=<?= $user->id; ?>">  <button type="button" class="btn btn-default"> <span class="badge badge-light"><?= $user->name; ?></span> <span class="badge badge-light"><?= $user->contribution; ?></span></button></a>
                       <a id="signup" class=" btn btn-primary btn-sm" href="logout.php"><b>Logout</b></a>


            
                <!-- /.navbar-collapse -->
             <?php } else { ?>
                
                    
                       <a id="signup" class="btn " href="sign_up.php">Sign up</a>
                        <a id="login" class="btn " href="login.php">Login</a>
                   
            <?php } ?>

          
      </div>
    </div>
  </nav>
    
</header>

<main>
    <div class="container-fluid">
        