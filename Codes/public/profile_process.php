<?php
	
  include "config.php";

	  $profile_image = addslashes(file_get_contents($_FILES['profile_image']['tmp_name']));

      $username = $_SESSION['username']; //storing the username of currently logged in user in the variable $username

      $query = "SELECT user_id FROM user WHERE username='$username'";
      $result = mysqli_query($connection, $query);

      if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $user_id =  $row['user_id']; //returns id
      }
      }

      $send_query = "INSERT INTO user (profile_image) VALUES ('{$profile_image}')";


    
?>