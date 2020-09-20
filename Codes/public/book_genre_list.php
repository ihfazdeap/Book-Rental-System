<?php require_once("../resources/config.php"); 
    include_once('header.php');
?>
       <!----------------------------------Genre Heading----------------------------------->
       <section class="user-section">
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>Genres</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       <!----------------------------------Homepage Button and User Options----------------------------------->
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
                          $query = "SELECT * FROM genre";
                          $send_query = mysqli_query($connection, $query) or die( mysqli_error($connection));
                          
                          while($row = mysqli_fetch_array($send_query)){
                            
                            echo "<tr><td><a href='single_genre.php?id={$row['genre_id']}'>{$row['genre_title']}</a></td></tr>";
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