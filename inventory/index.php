<!-- Alexander Simchuk
 This page will introduce shoppers to the website and direct them to their options 
-->

<?php
  require ("../include/top.html");

  #ini_set('display_errors',1);
  #error_reporting(E_ALL);
  session_start();

?>
<form action="update_cart.php" method="POST">
  <table class="table table-bordered">
    <tbody>
      <tr>
        <td>
          <h3>ID #</h3>
        </td>
        <td>
          <h3>Name</h3>
        </td>
        <td>
          <h3>Image</h3>
        </td>
        <td>
          <h3>Quantity</h3>
        </td>
      </tr>  
      <tr>
        <td>
          <p>1145</p>
        </td>
        <td>
          <p>Crane (Model A)</p>
        </td>
        <td>
          <p>Insert Image here...</p>
        </td>
        <td>
          <button type="submit" name="item" value="1145">Add to Cart</button>
        </td>
      </tr>
      <tr>
        <td>
          <p>1148</p>
        </td>
        <td>
          <p>Starsea Kusadama</p>
        </td>
        <td>
          <p>Insert Image here...</p>
        </td>
        <td>
          <button type="submit" name="item" value="1148">Add to Cart</button>
        </td>
      </tr>
      <tr>
        <td>
          <p>1150</p>
        </td>
        <td>
          <p>Plane</p>
        </td>
        <td>
          <p>Insert Image here...</p>
        </td>
        <td>
          <button type="submit" name="item" value="1150">Add to Cart</button>
        </td>
      </tr>
    </tbody>
  </table>
</form>

<?php
 
  require_once ("../include/bot.html");
?>
