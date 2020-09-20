<?php require_once("../resources/config.php"); 
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
    include_once('header.php');
//echo $_SESSION['total_price'];
?>
   <section class="payment-section">
        <!----------------------------------Page Heading----------------------------------->
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

  </section>
       <!----------------------------------Item Info Table----------------------------------->
       <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12">
        <table class="payment-info-table">
        <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        </tr>

           <?php
 
                if(isset($_GET['add'])){
                    add_to_cart($_GET['add']);
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

            $_SESSION['cart_data'] = $cart_data;
            $_SESSION['cookie'] = $cart_data;
            $_SESSION['total'] = $total;
       }
       } ?>
           
            <tr>
                <td colspan="3">Delivery cost</td>
                <td>50</td>
            </tr>
            <tr>
                <td colspan="3">Total</td>
                <td>
                <?php
                      if($_SESSION['total']==0){
                          echo $_SESSION['total'];
                      }else{
                        $_SESSION['total'] += 50; 
                      echo $_SESSION['total'] ;
                      }
                     ?>
                </td>
            </tr>
        </table>
    </div>
    </div>



     <!----------------------------------Payment Buttons----------------------------------->
          <div class="gap"></div>

          <div class="bkash-button">
            <a class="btn btn-default" href="checkout.php?price=<?php echo $_SESSION['total'] ?>" role="button">Checkout</a>
          </div>
          <div class="gap"></div>
    </section>

<?php include_once('footer.php');?>