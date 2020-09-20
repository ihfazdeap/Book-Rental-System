<?php require_once("../resources/config.php"); 
       include_once('header.php');
?>



      <!----------------------------------Genre Heading----------------------------------->
      <section>
          <div class="container">
              <div class="row">
                 <div class="col-md-1"></div>
                 <div class="col-xs-12 col-sm-12 col-md-10">
                 <?php
                          $query = "SELECT * FROM genre WHERE genre_id = ". escape_string($_GET["id"]) ." ";
                          $send_query = mysqli_query($connection, $query);
                          
                             while($row = mysqli_fetch_array($send_query)){
                          
                           echo "<h2 class=\"genre-heading-font\">{$row['genre_title']}</h2";
                             }
                  ?>
                 </div>
                 <div class="col-md-1"></div>
              </div>
          </div>
      </section>

      <!----------------------------------Genre List Table----------------------------------->
      <section>
        <div class="container">
            <div class="row">
               <div class="col-md-2"></div>
               <div class="col-xs-12 col-sm-12 col-md-8">
                  <div class="genre-list-table">
                      <table>
                        <?php
                           $query = "SELECT * FROM book WHERE genre_id = ". escape_string($_GET["id"]) ." ";
                           $send_query = mysqli_query($connection, $query);
                    
                           while($row = mysqli_fetch_array($send_query)){
                            
                            echo "<tr><td><a href='single_book.php?id={$row['book_id']}'>{$row['book_title']}</a></td></tr>";
                           }
                          ?>
                     
                      </table>
                  </div>
               </div>
               <div class="col-md-2"></div>
            </div>
        </div>
    </section>

  <?php include_once('footer.php');?>