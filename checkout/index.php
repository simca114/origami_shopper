<!-- Alexander Simchuk
 This page will introduce shoppers to the website and direct them to their options 
-->

<?php
  require ("../include/top.html");

  #ini_set('display_errors',1);
  #error_reporting(E_ALL);
  session_start();

?>

<div class="col-xs-6">
<?php
  if(is_null($_SESSION['cart']))
  {
?>
    <h3>Cart is Empty</h3>

    <div class="list-group col-xs-5">
      <a href="../inventory/index.php" class="list-group-item">Continue Shopping</a>
    </div>

<?php
  }
  else
  {
?>
  <p>(This is where info like adress and name would be placed)</p>
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

  <p>Please verify that the information above is correct</p>

  <div class="list-group col-xs-5">
    <a href="complete_order.php" class="list-group-item">Complete Order</a>
  </div>
</div>
<?php
  }
?>

<?php
 
  require_once ("../include/bot.html");
?>
