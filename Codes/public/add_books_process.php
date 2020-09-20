<?php

	
  include "../resources/config.php";
  include_once('header.php');

  $book_title = $_POST["book_title"];
  $genre = $_POST["genre"];
  $price = $_POST["price"];
  $book_describe = $_POST["book_describe"];
  $book_image = addslashes(file_get_contents($_FILES['book_image']['tmp_name'])); 
  $isbn = $_POST["isbn"];
  $author = $_POST["author"];


  //Here, i am trying to match the genre with the genre title in the genre db. 
  //Then i am asking for the genre_id for that particular genre so that i can store it as a foreign key.
  $query = "SELECT genre_id FROM genre WHERE genre_title='$genre'";
  $result = mysqli_query($connection, $query);

  if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $genre_id =  $row['genre_id']; //returns genre id of that particular genre
  }
}

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

$sql = "INSERT INTO book (book_title, genre_id, book_price, book_description, ISBN, book_image, user_id, author) VALUES ('$book_title', '$genre_id', '$price', '$book_describe', '$isbn', '{$book_image}', '$user_id', '$author')";

?>


     <!----------------------------------Book Collection----------------------------------->

<?php

  if (mysqli_query($connection, $sql))
  {
    echo "<br><h2> Book Added successfully </h2>";
  }
  else
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
  }

		
?>


     <!----------------------------------Footer----------------------------------->
        
  <?php include_once('footer.php');?>

</body> 