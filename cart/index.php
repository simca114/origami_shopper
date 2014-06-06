<!-- Alexander Simchuk
 This page shows the current contents of the cart
-->

<?php
  require ("../include/top.html");

  #ini_set('display_errors',1);
  #error_reporting(E_ALL);
  session_start();

?>

<div class="col-xs-5">
<?php
  if(is_null($_SESSION['cart']))
  {
?>
    <h3>Cart is Empty</h3>
<?php
  }
  else
  {
?>

  <h3>Currently in Cart</h3>
  <table class="table table-bordered">
    <tr>
      <td>
        <h4>ID #</h4>
      </td>
      <td>
        <h4>Quantity</h4>
      </td>
    </tr>
<?php
    for($i=0;is_null($_SESSION['cart'][$i][0]) == false; $i++)
    {
?>
    <tr>
      <td>
        <p><?php echo $_SESSION['cart'][$i][0]?></p>
      </td>
      <td>
        <p><?php echo $_SESSION['cart'][$i][1]?></p>
      </td>
    </tr>
<?php
    }
?>
  </table>

  <div class="list-group col-xs-6">
    <a href="../checkout/index.php" class="list-group-item">Proceed to Checkout</a>
  </div>
<?php
  }
?>
</div> 

<?php
 
  require_once ("../include/bot.html");
?>
