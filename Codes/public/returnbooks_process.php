<?php
  include "../resources/config.php";  


  $id = $_GET["id"];

  mysqli_query($connection, "DELETE FROM order_books WHERE book_id=$id");

?>

<script type="text/javascript">
	window.location = 'borrowed_books.php';
</script>