<?php include_once("../resources/config.php"); 
    include_once('header.php');
?>

  <section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>Give your Feeback</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       <!----------------------------------Homepage Button and User Options----------------------------------->
  </section>
  
       


    <div class="container-fluid text-center gap">

      <div class="row justify-content-center">
        <div class="col-md-6" align="left">
          <?php
                          $query = "SELECT * FROM book WHERE book_id = ". escape_string($_GET["id"]) ." ";
                          $send_query = mysqli_query($connection, $query);

                          while($row = mysqli_fetch_array($send_query)){
                            
                            echo "<h5>Book: {$row['book_title']}</h5>";
                            echo "<h5>Author: {$row['author']}</h5>";
                          
                          ?>

        </div>
      </div>
      
      <div class="row justify-content-center">

        <div class="col-md-6">
          <?php echo "<form action='feedback_process.php?id={$row['book_id']}' method='post'> class=\"d-block mb-4 h-100 text-center\">"; 
          } ?>
          <form action="feedback_process.php" method="post">
          <textarea class="form-control halfwidth1" name="feedback" placeholder="Write your feedback" rows="5"></textarea>
        </div>
      </div>
      <div class="row gap">
              <button class="btn submit-button" type="submit">Submit</button>
          </form>
      </div>
    </div>

     <!----------------------------------Footer----------------------------------->
        

  <?php include_once('footer.php');?>


</body>
</html>