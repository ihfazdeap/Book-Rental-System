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
                 <h2>View Feebacks</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>

  </section>

<div class="container text-center">
        <table border="2" align="center" class="table1 col-xs-10 col-sm-10 col-md-8"">


        <tr>

        <th class="text-center"> User ID </th>
        <th class="text-center pad"> Feedback </th>
        </tr>



  <?php
                      $query = "SELECT * FROM feedback WHERE book_id = ". escape_string($_GET["id"]) ." ";
                      $send_query = mysqli_query($connection, $query);

                      while($row = mysqli_fetch_array($send_query)){ ?>


                      <tr>

                        <td class="text-center"><?php echo $row["user_id"];?> </td>
                        <td class="text-center pad"><?php echo $row["feedback"];?> </td>
                        </tr>
                        <?php 
                      }
                        ?>
                        </table>
                    </div>
  
<div class="gap"></div>




<?php 
include_once('footer.php');?>
?>