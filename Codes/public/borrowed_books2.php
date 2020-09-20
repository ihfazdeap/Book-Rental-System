<?php require_once("../resources/config.php"); 
    include_once('header.php');
?>



     <!----------------------------------Book Collection----------------------------------->


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

       $book_id_data = array();

      //selecting the order_id based on user_id
      $query = "SELECT * FROM orders WHERE user_id = $user_id";
      $send_query = mysqli_query($connection, $query);

      while($row = mysqli_fetch_array($send_query)){
          $order_id =  $row['order_id'];
        }

      //selecting the book_id based on order_id
      $query = "SELECT * FROM order_books WHERE order_id = $order_id";
      $send_query = mysqli_query($connection, $query);

      while($row = mysqli_fetch_array($send_query)){
          $book_id_array = array(
                              'book_id' => $row['book_id'],
                              );
          $book_id_data[] = $book_id_array;
        }


?>
      
        


<section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>Your Borrowed Books</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       <!----------------------------------Homepage Button and User Options----------------------------------->
  </section>

      <div class="container text-center">
        <table border="2" align="center" class="table1 col-xs-10 col-sm-10 col-md-8">


        <tr>

        <th class="text-center pad"> Title </th>
        <th class="text-center pad"> Genre </th>
        <th class="text-center pad"> Price </th>
        <th class="text-center pad"> Author </th>
        <th class="text-center pad"> ISBN </th>
        <th class="text-center pad"> Delete </th>
        </tr>

       <?php

      

      foreach($book_id_data as $keys => $values) {
      
      $query = "SELECT * FROM book WHERE book_id IN ($keys)";
      $send_query = mysqli_query($connection, $query);

      while($row = mysqli_fetch_array($send_query)){    
?>
      
        <tr>

        <td class="text-center pad"><?php echo $row["book_title"];?> </td>
        <td class="text-center pad"><?php echo $row["genre_id"];?> </td>
        <td class="text-center pad"><?php echo $row["book_price"];?> </td>
        <td class="text-center pad"><?php echo $row["author"];?> </td>
        <td class="text-center pad"><?php echo $row["ISBN"];?> </td>
        <td class="text-center pad"> <a href="deletebooks_process.php?id=<?php echo $row["book_id"]; ?>">Delete</a> </button></td>
        </tr>
        <?php
        
      }

    }
     
        ?>
        </table>
    </div>
  
<div class="gap"></div>


    


     <!----------------------------------Footer----------------------------------->
        
        
  <?php include_once('footer.php');?>