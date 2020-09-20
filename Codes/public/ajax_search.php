<?php

require_once("../resources/config.php"); 
 
if (isset($_POST['query'])) {
     
    $query = "SELECT * FROM book WHERE book_title LIKE '{$_POST['query']}%' LIMIT 100";
    $result = mysqli_query($connection, $query);
}
else{
    $sql = "SELECT book_id, book_image, book_title, author, ISBN FROM book";
    $result = mysqli_query($connection, $sql);
}
 
  if (mysqli_num_rows($result) > 0) {
     while ($row = mysqli_fetch_array($result)) {
		 ?>
		<div id="output" class="col-lg-3 col-md-4 col-sm-6 col-xs-10">
		<?php echo "<a href='single_book.php?id={$row['book_id']}' class=\"d-block mb-4 h-100 text-center\">"; ?>
			  <?php echo '<img src="data:image;base64,'.base64_encode($row['book_image']).'" alt="Image" style="width:200px; height:250px;">'; ?>
			  <p class="text-center book-title"><strong><?php echo $row["book_title"];?> </strong></p>
			</a>
	  </div>
<?php
    }
 } else 
    echo "<p style='color:red'>Book not found...</p>";

 



    ?>
?>