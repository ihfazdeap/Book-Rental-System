<?php require_once("../resources/config.php"); 
      include_once('signin_process.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media_queries.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Book Rental</title>
</head>
<body>
    <!----------------------------------Navbar----------------------------------->
    <header>
        <nav class="navbar navbar-expand-sm">
            <!-- Brand/logo -->
            <div class="nav-logo">
            <a class="navbar-brand" href="index.php">Book Rental</a>
           </div>
            <!-- Links -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"><i class="fa fa-bars"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <?php if(isset($_SESSION['username'])){ ?>
                      <li class="nav-item">
                          <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="book_genre_list.php">Browse Books</a>
                        </li>
                      <li class="nav-item">
                         <a class="nav-link" href="user.php">Welcome, <?php echo $_SESSION['username'] ?></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href='signin_process.php?logout' >Logout</a>
                      </li>
               <?php }else{ ?>
                        <li class="nav-item">
                          <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="book_genre_list.php">Browse Books</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="signup.php">Sign up</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="login.php">Login</a>
                        </li>
                    
              <?php }
               ?>
              
              <li class="nav-item">
                <a class="nav-link" href="cart.php">My Cart</a>
              </li>
            </ul>
            </div>
        </nav>
    </header>