<?php require_once("../resources/config.php"); 
  include_once('header.php');
?>


    <!----------------------------------Below Navbar----------------------------------->
 <section class="user-section">

      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h1>Welcome Bibliophiles</h1>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
  </section>

  <h5>The shelves are all booked up for you!</h5>


  <!----------------------------------Search Container------------------------------->
<div class="container">
  <div class="row">
    <form>
    <div class=" input-group mb-3 col-xs-10 col-md-10 mx-auto">
    <input type="text" name="search" id="search" autocomplete="off" placeholder="Search book name here....">
      <div class="input-group-append">
      <button class="btn btn-success" type="submit">Search</button><br>
      </div>
    </div>
       </form>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
       $("#search").keyup(function(){ //Triggers the keyup event
          var query = $(this).val();
          if (query != "") {
            $.ajax({
              url: 'ajax_search.php', //url of the page request is sent to
              method: 'POST',
              data: {query:query}, // data to be sent to the server
              success: function(data){ //function to be run when the request succeeds
 
                $('#output').html(data); //Sets or returns the content of selected elements
                $('#output').css('display', 'block');
 
                $("#search").focusout(function(){
                    $('#output').css('display', 'none');
                });
                $("#search").focusin(function(){
                    $('#output').css('display', 'block');
                });
              }
            });
          } else {
          $('#output').css('display', 'none');
        }
      });
    });
  </script>

  <!----------------------------------Books------------------------------------------>

       

<div class="container"> <!-- Book images -->

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Latest Collections</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">
  <?php require_once("ajax_search.php"); 
    ?>

  </div>

</div>


  <!----------------------------------Footer----------------------------------------->

</body>



  <?php include_once('footer.php');?>
</html>