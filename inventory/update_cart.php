<!-- Alexander Simchuk
 This page adds selected item to cart and notifys user of success/failure 
-->

<?php
  require ("../include/top.html");

  #ini_set('display_errors',1);
  #error_reporting(E_ALL);
  session_start();

  #check if cart is empty, if so, initialize array
  if(is_null($_SESSION['cart']))
  {
    $_SESSION['cart'] = array
    (
      array($_POST['item'],1)
    );
  }
  else
  {
    $exist = false;
    $i = 0;
    for($i;is_null($_SESSION['cart'][$i][0]) == false; $i++)
    {
      if($_SESSION['cart'][$i][0] == $_POST['item'])
      {
        $_SESSION['cart'][$i][1]++;
        $exist = true;
      }
    }

    if($exist == false)
    {
      $_SESSION['cart'][$i][0] = $_POST['item'];
      $_SESSION['cart'][$i][1] = 1;
    }
  }
?>

<div class="list-group col-xs-4">
<?php
  echo "Item " . $_POST['item'] . " was added successfully!";
?>
    <a href="index.php" class="list-group-item">Continue Shopping</a>
    <a href="../cart/index.php" class="list-group-item">View Cart</a>
</div>
<?php
 
  require_once ("../include/bot.html");
?>
