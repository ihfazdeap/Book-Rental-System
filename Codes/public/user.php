<?php
include "../resources/config.php";  
include_once('header.php');
?>


    <section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>User Profile</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       <!----------------------------------Homepage Button and User Options----------------------------------->
  </section>

<?php

      $username = $_SESSION['username']; //storing the username of currently logged in user in the variable $username

      //Here, i am trying to match the username with the currently logged in user 
      //Then i am asking for the user_id for that particular user so that i can store it as a foreign key in book table.
      //This will help me to identify who is the owner of the book.
      $query = "SELECT user_id FROM user WHERE username='$username'";
      $result = mysqli_query($connection, $query);

      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $user_id =  $row['user_id']; //returns id
      }
      }
?>

<?php 
        $query = "SELECT * FROM  user WHERE username ='$username' ";
        $send_query = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($send_query)){
  ?>




<div class="main-body">
  <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <?php echo '<img src="data:image;base64,'.base64_encode($row['profile_image']).'" alt="Image" class="rounded-circle" width="200" height="200">'; ?>
                    <div class="mt-3">
                      <h4><?php echo $row["full_name"];?></h4>
                    </div>
                  </div>
                </div>
              </div>



            <div class="card2">
                <div class="card-header2">
                    <h5 class="card-title mb-0">Options</h5>
                </div>

                <div class="list-group list-group-flush" role="tablist">
                    <a class="list-group-item list-group-item-action active"  href="user.php" role="tab">
                      Your Profile
                    </a>

                    <a class="list-group-item list-group-item-action"  href="add_books.php">
                      Add Books
                    </a>
                    <a class="list-group-item list-group-item-action" href="book_collection.php">
                      My Book Collection
                    </a>
                    <a class="list-group-item list-group-item-action" href="borrowed_books.php" role="tab">
                      Books Borrowed
                    </a>
                    
                </div>
            </div>
          </div>


            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row["username"];?>
                    </div>
                  </div>
                  <hr class="">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row["email"];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row["number"];?>
                    </div>
                  </div>
                  <hr>
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $row["address"]; 
                    } ?>
                    </div>
                  </div>
                </div>
              </div>
</div>
</div>
</div>

     <!----------------------------------Footer----------------------------------->
        
        
  <?php include_once('footer.php');?>


</body>
</html>