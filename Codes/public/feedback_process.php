<?php
	
  include "../resources/config.php";
  include_once('header.php');

	$feedback = $_POST["feedback"];


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


      $query = "SELECT * FROM book WHERE book_id = ". escape_string($_GET["id"]) ." ";
      $send_query = mysqli_query($connection, $query);

      while($row = mysqli_fetch_array($send_query)){
                            
                            $book_id =  $row['book_id'];
                          }
                          

  $sql = "INSERT INTO feedback (book_id, user_id, feedback) VALUES ('$book_id', '$user_id', '$feedback')";


    
?>



     <!----------------------------------Book Collection----------------------------------->

<?php

  if (mysqli_query($connection, $sql))
  {
    echo "<br> New feedback record created successfully";
  }
  else
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }

    
?>

     <!----------------------------------Footer----------------------------------->

<?php 
include_once('footer.php');?>
?>

</body> 
</html>