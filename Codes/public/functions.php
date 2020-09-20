<?php

function redirect($location){
    header("Location: $location");
}

function escape_string($result){
    global $connection;
    return mysqli_real_escape_string($connection, $result);
}

function book_query($result){
    global $connection;
    $query = "SELECT * FROM book WHERE book_id = ". escape_string($result) ." ";
    $send_query = mysqli_query($connection, $query);
    return $send_query;
}

function get_genre_of_book($result){
    global $connection;
    $query = "SELECT * FROM book WHERE genre_id = ". escape_string($result) ." ";
    $send_query = mysqli_query($connection, $query);
    return $send_query;
}

function get_genre_id($result){
    global $connection;
    $query = "SELECT * FROM genre WHERE genre_id = ". escape_string($result) ." ";
    $send_query = mysqli_query($connection, $query);
    return $send_query;
}

function get_user_id_session($username){
    global $connection;
    $query = "SELECT user_id FROM user WHERE username='$username'";
    $result = mysqli_query($connection, $query);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    $user_id =  $row['user_id']; //returns id
    }
    }
    return $user_id;
}

function get_book_collection($result){
    global $connection;
    $query = "SELECT * FROM book WHERE user_id = $result ";
    $send_query = mysqli_query($connection, $query);
    return $send_query;
}

function get_user_orders($user_id){
    global $connection;
    $query = "SELECT * FROM orders WHERE user_id = $user_id";
      $send_query = mysqli_query($connection, $query);

      while($row = mysqli_fetch_array($send_query)){
          $order_ids[] =  $row['order_id'];
        
      }
      foreach($order_ids as $order_id){
      $query = "SELECT * FROM order_books WHERE order_id = $order_id";
      $send_query = mysqli_query($connection, $query);

      while($row = mysqli_fetch_array($send_query)){
          $book_ids[] =  $row['book_id'];
      }
    }
    return $book_ids;
}

function add_to_cart($result){
    global $connection;
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
           if($cart_data[$keys]["book_id"] == $result)
           {
             echo "item already added";
           }
          }
         }
         else
         {
        
             $query = "SELECT * FROM book WHERE book_id=". escape_string($result) ." ";
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

function delete_item($result,$total){
    global $connection;
    $cookie_data = stripslashes($_COOKIE[$_SESSION['username']]);
    $cart_data = json_decode($cookie_data, true);
    foreach($cart_data as $keys => $values)
    {
     if($cart_data[$keys]['book_id'] == $result)
     {
      $total -= $cart_data[$keys]['book_price'];
      unset($cart_data[$keys]);
      $item_data = json_encode($cart_data);
      setcookie($_SESSION['username'], $item_data, time() + (86400 * 30));
      header("location:cart.php?remove=1");
     }
    return $total;
   
  }
    
}

?>