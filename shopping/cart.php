<?php


?>
<header>
  <link rel="stylesheet" href="css/cart.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</header>

<body id="background">
<?php
  session_start();
  require 'connect.php';
  require 'item.php';
  if(isset($_GET['id'])){                //The PHP provides $_GET associative array to access all the sent information using GET method.

      $result = mysqli_query($con, 'select * from product where id='.$_GET['id']);    //$_GET['id'] basically gets the value of 'id' from the URL encoding..information sent by the user when he clicks order now on a particualr item
      $product = mysqli_fetch_object($result);
      $item = new Item();
      $item->id = $product->id;
      $item->name = $product->name;
      $item->price = $product->price;
      $item->quantity = 1;
      //Check product is existing in cart
      $index=-1;
      $cart = unserialize(serialize($_SESSION['cart']));   //$_SESSION[] is associative array    serialize converts a storable representation of a value(a string).  unserialize creates a PHP value from a stored representation
      for($i=0; $i<count($cart); $i++)
        if($cart[$i]->id==$_GET['id'])
        {
          $index = $i; //product found
          break;
        }
        if($index==-1)
            $_SESSION['cart'][] = $item; //product not found so class 'item' added to the cart as an array inside associative array $_SESSION
        else{  //if found
          $cart[$index]->quantity++;   //quantity inceremented by 1 corresponding to where the product was found
          $_SESSION['cart'] = $cart;   //cart is updated in the session
        }
  }

  //deletes product in cart
if(isset($_GET['index'])){    // checks if delte ko click kia   ..index is the index of the associative array 'cart' starting from 0
    $cart = unserialize(serialize($_SESSION['cart']));
    unset($cart[$_GET['index']]);   //unset destroys variable.. cart se us index ki tuple ko delete kardia
    $cart = array_values($cart);
    $_SESSION['cart'] = $cart;
}
?>

<table cellpadding="10" cellspacing="10" border="1" align="center" border-collapse="collapse">
  <tr>
    <th>Option</th>

    <th>Name</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Subtotal</th>
  </tr>
  <?php
    $cart = unserialize(serialize($_SESSION['cart']));
    $s=0;
    $index = 0;
    for ($i=0; $i<count($cart); $i++) {
      $s += $cart[$i]->price * $cart[$i]->quantity;
  ?>
<div class="text">
    <tr>
      <td><a href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')">Delete</td>
      <td><?php echo $cart[$i]->name; ?></td>
      <td><?php echo $cart[$i]->price; ?></td>
      <td><?php echo $cart[$i]->quantity; ?></td>
      <td><?php echo $cart[$i]->price * $cart[$i]->quantity; ?></td>
    </tr>
</div>
   <?php
             $index++;
        }
   ?>
   <tr>
     <td colspan="4" align="right"><b>Sum</b></td>
     <td align="center"><?php  echo $s; ?></td>


</table>
<br>
<a href="index.php"><div class="cont">CONTINUE SHOPPING</div></a>
</body>
