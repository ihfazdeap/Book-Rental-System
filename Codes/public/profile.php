<?php
  require_once("../resources/config.php"); 
    include_once('header.php');

?>

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


    <!----------------------------------Profile----------------------------------->


<div class="main-body">
  <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <?php echo '<img src="data:image;base64,'.base64_encode($row['profile_image']).'" alt="Image" class="rounded-circle" width="150">'; ?>
                    <div class="mt-3">
                      <h4><?php echo $row["full_name"];
                    } ?></h4>
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
                    <a class="list-group-item list-group-item-action"  href="profile.php" role="tab">
                      Edit Profile
                    </a>
                    <a class="list-group-item list-group-item-action" href="#" role="tab">
                      Books Borrowed
                    </a>
                    
                </div>
            </div>
          </div>


            <div class="col-md-8">
              <?php 
                    $query = "SELECT * FROM  user WHERE username ='$username' ";
                    $send_query = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_array($send_query)){
              ?>
              <div class="row">
                <div class="col-sm-7 left-pad"> 
                  <h5>Username: <?php echo $row["username"];?></h5>
                  <h5>Email: <?php echo $row["email"];?></h5>
                  <h5>Address: <?php echo $row["address"];?></h5>
                  <h5>Telephone: <?php echo $row["number"];?></h5>
                </div>

                <div class="col-sm-5 "> 
                  <form method="post" action="profile_process.php">
                    <div class="row">
                    <div class="col-md-3">
                      <label>Upload profile photo</label>
                    </div>
                    <div class="col-md-9">
                      <input type="file" name="profile_image" id="profile_image">
                    </div>
                    <div class="col-md-4">
                      <input type="submit" value="Upload">
                    </div>
                  </div>
                  </form>
                </div>    

                  <?php  
                  }
                  
                
                    $query = "SELECT * FROM  user WHERE username ='$username' ";
                    $send_query = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_array($send_query)){

               echo '<img src="data:image;base64,'.base64_encode($row['profile_image']).'" alt="Image" style="width:200px; height:250px;">'; ?>

              <?php  
                  }
                  ?>

                </div>
              </div>
</div>
</div>
</div>









<?php include_once('footer.php');?>


</body>
</html>