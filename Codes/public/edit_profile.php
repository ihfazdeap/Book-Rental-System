<?php
  include "../resources/config.php";  
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
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Book Rental</title>
</head>
<body>
     <!----------------------------------Navbar----------------------------------->
     <header>
        <nav class="navbar navbar-expand-sm">
            <!-- Brand/logo -->
            <div class="nav-logo">
            <a class="navbar-brand" href="#">Book Rental</a>
            </div>
            <!-- Links -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"><i class="fa fa-bars"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="book_genre_list.html">Browse Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.html">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="payment.html">My Cart</a>
              </li>
            </ul>
            </div>
        </nav>
    </header>

    <section>
        <div class="container">
            <div class="row">
              <div class="col-md-2 col-xs-12 col-sm-12 back-button">
                  <button> <a href="user.html">Go Back</a></button>
              </div>
              <div class="col-md-10"></div>
            </div>
           </div>
    </section>

    <!----------------------------------Profile----------------------------------->

<section>
         <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-xs-12 col-sm-12 col-md-8">
                   <div class="add-book-form">
                    <form action="profile_process.php" method="post">
                       <div class="container">
                        <div class="row">
                          <div class="col-md-3">
                            <label for="book-title">Name:</label>
                          </div>
                          <div class="col-md-9">
                            <input type="text" name="name">
                          </div>
                        </div>
                       </div>
                       
                       <div class="container">
                        <div class="row">
                          <div class="col-md-3">
                            <label for="isbn">Username:</label>
                          </div>
                          <div class="col-md-9">
                            <input type="text" name="username">
                          </div>
                        </div>
                       </div>
                       <div class="container">
                        <div class="row">
                          <div class="col-md-3">
                            <label for="isbn">Address:</label>
                          </div>
                          <div class="col-md-9">
                            <input type="text" name="address">
                          </div>
                        </div>
                       </div>
                       <div class="container">
                        <div class="row">
                          <div class="col-md-3">
                            <label for="author">Phone:</label>
                          </div>
                          <div class="col-md-9">
                            <input type="text" name="phone">
                          </div>
                        </div>
                       </div>
                       
                       <div class="container">
                        <div class="row">
                          <div class="col-md-4"></div>
                          <div class="col-md-4">
                            <input type="submit" value="Save">
                          </div>
                          <div class="col-md-4"></div>
                        </div>
                       </div>
                      </form>
                   </div>
                </div>
                <div class="col-md-2"></div>
            </div>
         </div>
     </section>


     <!----------------------------------Footer----------------------------------->
        
<footer class="panel-footer-2 text-center">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-xs-12 col-sm-12 col-md-4">
          <span>Hours:</span><br>
          <p>Sun-Thurs: 10:00am - 6.00pm</p>
          <p>Dhaka, Bangladesh</p>
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-xs-12 col-sm-12 col-md-4">
          <span>Contact:</span><br>
          <p>Email: bookrentalsystem@gmail.com</p>
          <p>Phone: +88 01711 111 111</p>
          <hr class="visible-xs">
        </section>
        <section id="social" class="col-xs-12 col-sm-12 col-md-4">
          <span>Social Media: </span><br> 
          <a href="" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-instagram"></a>
        </section>
      </div>
      <div class="text-center">&copy; Book Rental System 2020</div>
    </div>
  </footer>


</body>
</html>