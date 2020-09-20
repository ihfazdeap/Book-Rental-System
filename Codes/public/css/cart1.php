<?php require_once("../resources/config.php"); 
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
    include_once('header.php');
//echo $_SESSION['total_price'];
?>

    
    <section class="user-section">
        <!----------------------------------Page Heading----------------------------------->
      <div class="container">  
        <div class="row">
          <div class="col-md-1"></div>
            <div class="col-sm-10 col-lg-10 col-md-10">
               <div class="user-heading">
                 <h2>My Cart</h2>
               </div>
              <div class="col-md-1"></div>
            </div>
        </div>
      </div>
       <!----------------------------------Homepage Button and User Options----------------------------------->
  </section>


   <section class="payment-section">

       <!----------------------------------Item Info Table----------------------------------->
       <div class="row">
        <div class="col-xl-12 col-md-10 col-sm-10 col-xs-10 mx-auto">
        <table class="payment-info-table">
        <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Remove</th>
                        </tr>

           <?php
 
                if(isset($_GET['add'])){
                    {
                       if(isset($_COOKIE[$_SESSION['username']]))
                        {
                         $cookie_data = stripslashes($_COOKIE[$_SESSION['username']]);
                       
                         $cart_data = json_decode($cookie_data, true);
                        }
                        else
                        {
                         $cart_data = array();
                        }
                       
                        $book_id_list = array_column($cart_data, 'book_id');
                       
                        if(in_array($_GET["add"], $book_id_list))
                        {
                         foreach($cart_data as $keys => $values)
                         {
                          if($cart_data[$keys]["book_id"] == $_GET["add"])
                          {
                            echo "item already added";
                          }
                         }
                        }
                        else
                        {
                       
                            $query = "SELECT * FROM book WHERE book_id=". escape_string($_GET["add"]) ." ";
                            $send_query = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_array($send_query)){

                                $book_array = array(
                                    'book_id'   => $row['book_id'],
                                    'book_name'   => $row['book_title'],
                                    'book_price'  => $row['book_price'],
                                    
                                );
                                $cart_data[] = $book_array;
                            }
                    $book_data = json_encode($cart_data);
    
                    setcookie($_SESSION['username'], $book_data, time() + (86400 * 30));
                    header("location:cart.php?success=1");
                  
                    
                }}
            }
    
               
                if(isset($_COOKIE[$_SESSION['username']])){

                    $total = 0;
                    $cookie_data = stripslashes($_COOKIE[$_SESSION['username']]);
                    $cart_data = json_decode($cookie_data, true);
                    foreach($cart_data as $keys => $values){
                  ?>
                       <tr>
                        <td><?php echo $values['book_name'] ?></td>
                        <td><?php echo $values['book_price'] ?></td>
                        <td>1</td>
                        <td><a href="cart.php?delete=<?php echo $values['book_id'] ?>">Remove</a></td>
                    </tr>

                   <?php 
                         $total += $values['book_price'];
                        //$total = $total + ($values["item_quantity"] * $values["item_price"]);
                   ?>
  
                <?php
                 if(isset($_GET['delete'])){

                    $cookie_data = stripslashes($_COOKIE[$_SESSION['username']]);
                    $cart_data = json_decode($cookie_data, true);
                    foreach($cart_data as $keys => $values)
                    {
                     if($cart_data[$keys]['book_id'] == $_GET["delete"])
                     {
                      $total -= $cart_data[$keys]['book_price'];
                      unset($cart_data[$keys]);
                      $item_data = json_encode($cart_data);
                      setcookie($_SESSION['username'], $item_data, time() + (86400 * 30));
                      header("location:cart.php?remove=1");
                     }

                   
                  }
   
            
            }
            
            }} ?>
           
            <tr>

                <td colspan="3">Delivery cost</td>
                <td>50</td>
            </tr>
            <tr>
                <td colspan="3">Total</td>
                <td>
                <?php
                     if($total==0){
                         echo $total;
                     }
                     else{
                     $total += 50; 
                    echo $total ;
                     }?>
                </td>
            </tr>
        </table>
    </div>
    </div>



     <!----------------------------------Payment Buttons----------------------------------->
            <a class="btn cash-pay-button btn-default" href="#" role="button">Cash On Delivery</a>

            <a class="btn bkash-button btn-default" href="checkout.php?price=<?php echo $total ?>" role="button">Checkout</a>
    
    </section>

<?php include_once('footer.php');?>