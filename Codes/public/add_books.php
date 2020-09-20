<?php
include "../resources/config.php";  
include_once('header.php');
?>



     <!----------------------------------Add Books----------------------------------->
     <section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>Add Book</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       <!----------------------------------Homepage Button and User Options----------------------------------->
  </section>


    <div class="col-md-6 offset-md-3 gap">
                    <span class="anchor" id="add_books"></span>

                    <!-- form card register -->
                    <div class="card card-outline-secondary">
                        <div class="card-body">
                            <form class="form" role="form" action="add_books_process.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="inputName">Book Title</label>
                                    <input type="text" class="form-control" name="book_title">
                                </div>
                                <div class="form-group">
                                    <label>Genre</label>
                                    <input class="form-control" list="genre" name="genre">
                                    <datalist id="genre">
                                      <option value="Horror">
                                      <option value="Romance">
                                      <option value="Comedy">
                                      <option value="Thriller">
                                      <option value="Psychological">
                                      <option value="Non-Fiction">
                                      <option value="Historical">
                                      <option value="Poetry">
                                      <option value="Religion">
                                      <option value="Crime">
                                      <option value="Sports">
                                    </datalist>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">ISBN</label>
                                    <input class="form-control" type="text" id="isbn" name="isbn">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Book Price</label>
                                    <input class="form-control" type="text" id="price" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Author</label>
                                    <input class="form-control" type="text" id="author" name="author">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Picture</label>
                                    <input type="file" name="book_image" id="book_image">
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Book Description</label>
                                      <textarea class="form-control" id="book_describe" name="book_describe" rows="3"></textarea>
                                </div>

                                
                                <div class="form-group text-center">
                                    <button type="submit" value="Add Book" class="btn btn-success btn-lg">Add Book</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form card register -->

                </div>

                <div class="gap"></div>
     <!----------------------------------Footer----------------------------------->
        
  <?php include_once('footer.php');?>


</body>
</html>