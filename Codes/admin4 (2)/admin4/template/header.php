<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
    <style type="text/css">
      body{
   background:#f4f4f4;
    }

/* Navbar */
.navbar{
  min-height: 33px !important;
  margin-bottom:0;
  border-radius:0;
}

.navbar-nav > li > a, .navbar-brand{
  padding-top:6px !important;
  padding-bottom:0 !important;
  height: 33px;
}

.navbar-default {
  background-color: #2d096b;
  border-color: #2d096b;
}
.navbar-default .navbar-brand {
  color: #ffffff;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #2d096b;
}
.navbar-default .navbar-text {
  color: #ffffff;
}
.navbar-default .navbar-nav > li > a {
  color: #ffffff;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #ffffff;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #2d096b;
  background-color: #ffffff;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #ffffff;
  background-color: #ffffff;
}
.navbar-default .navbar-toggle {
  border-color: #fafafafa;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #2d096b;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ffffff;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #2d096b;
}
.navbar-default .navbar-link {
  color: #ffffff;
}
.navbar-default .navbar-link:hover {
  color: #ffbbbc;
}

/* Custom */
.main-color-bg{
  background-color: #2d096b !important;
  border-color: white !important;
  color:#ffffff !important;
}

/* Header */
#header{
  background: #e0e0e0;
  color:#ffffff;
  padding-bottom: 10px;
  margin-bottom: 15px;
}

#header .create{
  padding-top: 20px;
}

/* Breadcrumb */
.breadcrumb{
  background: #cccccc;
  color: #2d096b;
}

.breadcrumb a{
  color: #2d096b;
}

/* Progress Bars */
.progress-bar{
  background: #2d096b;
  color:#ffffff;
}

.dash-box{
  text-align:center;
}

#login{
  margin-top:30px;
}

/* Footer */
#footer{
  background:#333333;
  color:#ffffff;
  text-align:center;
  padding:30px;
  margin-top:30px;
}


@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #ecf0f1;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffbbbc;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffbbbc;
    background-color: #c0392b;
  }
}

    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Book Rental Management System</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
              <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp; Publisher</a></li>
              <!-- link to books.php -->
              <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
              <!-- link to contacts.php -->
              <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
              <!-- link to shopping cart -->
              <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to online Book Rental</h1>
        <p class="lead">This site has been made using PHP with MYSQL (procedure functions)!</p>
        <p>The layout use Bootstrap to make it more responsive. It's just a simple web!</p>
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">