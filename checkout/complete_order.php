<!-- Alexander Simchuk
 This page will introduce shoppers to the website and direct them to their options 
-->

<?php
  require ("../include/top.html");

  #ini_set('display_errors',1);
  #error_reporting(E_ALL);
  session_start();

  unset($_SESSION['cart']);

  session_destroy();
?>

<h3>Order Placed</h3>

<div class="list-group col-xs-3">
  <a href="../inventory/index.php" class="list-group-item">Continue Shopping</a>
</div>

<?php
 
  require_once ("../include/bot.html");
?>
