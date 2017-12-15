<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pils Shop</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <?php   include 'inc/header.php'; ?>
    <div id="container">
    <?php   include 'inc/menu.php';?>
    <div class="price-higher">
      <form action="" method="get">
        <label>Beer prices higher then:</label><input type="number" required style="text-align:center;" autocomplete="off" name="price"><input value="Request" type="submit">
      </form>
      </div>

  <?php
  require("inc/connection.php");

  if (isset($_GET['price'])) {
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
      echo "<table id='checkout-table'>";
      echo "<thead>";
      echo "<th>Image</th>";
      echo "<th>Name</th>";
      echo "<th>Description</th>";
      echo "<th>Total</th>";
      echo "</thead>";
      echo "<tbody>";
    $price = $_GET['price'];
    // $sql = "SELECT SUM(price) AS TotalPrice FROM beercategory WHERE price >'".$price."' ORDER BY id asc";
    $sql = "SELECT name, description, price, image FROM beercategory WHERE price >'".$price."' ORDER BY id asc";
    $result = $conn->query($sql);
}
if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
echo "<tr>";
echo "<td><div id='checkout-image'>";
echo "<img src='".$row["image"]."'></img></td>";
echo "</div>";
echo "<td><div class='checkout-name'>". $row["name"] . "</div></td>";
echo "<td><div class='checkout-descr'>". $row["description"] . "</div></td>";
echo "<td><div class='checkout-price'>&euro;". $row["price"] . "</div></td>";
//echo  "<td><div class='total-price'>". $row["price"] . "</div></td></tr>";
}
} else {
echo "0 results";
}
}



  ?>
</tbody>
    <tfoot>
      <tr>

        <?php

        if (isset($_GET['price'])) {
          if ($_SERVER['REQUEST_METHOD'] == "GET") {
            echo "<td >Total Price</td>";
          $price = $_GET['price'];
          // $sql = "SELECT SUM(price) AS TotalPrice FROM beercategory WHERE price >'".$price."' ORDER BY id asc";
          $sql1 = "SELECT SUM(price) AS TotalPrice FROM beercategory WHERE price >'".$price."' ORDER BY id asc";
          $result = $conn->query($sql1);
      }
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
        echo "<td><div class='totalprice'>&euro;". $row["TotalPrice"] . "</div></td>";
      }}else {
        echo "0 results";
      }
      $conn->close();
      }?>

      </td>
    </tr>
    </tfoot>
  </tbody>
</table>
  </div>
    <?php   include 'inc/footer.php'; ?>
  </body>
</html>
