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
?>
      
        


<section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>Your Book Collection</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       <!----------------------------------Homepage Button and User Options----------------------------------->
  </section>

      <div class="container text-center col-xs-6 col-sm-6 col-md-8">
        <table border="2" align="center" class="table1 col-xs-6 col-sm-6 col-md-10">


        <tr>

        <th class="text-center pad"> Title </th>
        <th class="text-center pad"> Price </th>
        <th class="text-center pad"> Author </th>
        <th class="text-center pad"> ISBN </th>
        <th class="text-center pad"> Delete </th>
        </tr>

       <?php
      //selecting the currently logged in users books that s/he uploaded
      $query = "SELECT * FROM book WHERE user_id = $user_id ";
      $send_query = mysqli_query($connection, $query);

      while($row = mysqli_fetch_array($send_query)){    
?>
      
        <tr>

        <td class="text-center pad"><?php echo $row["book_title"];?> </td>
        <td class="text-center pad"><?php echo $row["book_price"];?> </td>
        <td class="text-center pad"><?php echo $row["author"];?> </td>
        <td class="text-center pad"><?php echo $row["ISBN"];?> </td>
        <td class="text-center pad"> <a href="deletebooks_process.php?id=<?php echo $row["book_id"]; ?>">Delete</a> </button></td>
        </tr>
        <?php
        
      }
     
        ?>
        </table>
    </div>
  
<div class="gap"></div>


    


     <!----------------------------------Footer----------------------------------->
        
        
  <?php include_once('footer.php');?>


</body>
</html>