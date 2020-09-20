<?php
  include "../resources/config.php";  


  $id = $_GET["id"];

  mysqli_query($connection, "DELETE FROM book WHERE book_id=$id");

?>

<script type="text/javascript">
	window.location = 'book_collection.php';
</script>