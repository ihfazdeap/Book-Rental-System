<?php require_once("../resources/config.php"); 
      include_once('header.php');
      include_once('signin_process.php');
?>


<section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>Login</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       
  </section>



<div class="col-xs-8 col-sm-8 col-md-5 offset-md-3 mx-auto gap">
                    <span class="anchor" id="add_books"></span>

                    <!-- form card register -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <form class="form" role="form" action="login.php" method="post" enctype="multipart/form-data">
                            	<?php include('errors.php'); ?>
                                <div class="form-group">
                                    <label for="inputName">Username</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputName">Password</label>
                                    <input class="form-control" type="password" name="password">
                                </div>
                                
                                <div class="form-group text-center">
                                    <button type="submit" name="login" value="Login" class="btn btn-success btn-lg">Login</button>
                                </div>
                                <p>
									Not yet a member? <a href="signup.php">Sign Up</a>
								</p>
                            </form>
                        </div>
                    </div>
                    <!-- /form card register -->

                </div>

                <div class="gap"></div>


        
  <?php include_once('footer.php');?>

</body>
</html>