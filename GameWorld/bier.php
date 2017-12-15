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
    <?php
    require("inc/connection.php");
    if (isset($_GET['brand_id'])) {
      $brand_id = $_GET['brand_id'];
        $sql = "SELECT name, description, price, image FROM beercategory WHERE brand_id='".$brand_id."' ORDER BY id asc";
    }
    else {
        $sql = "SELECT name, description, price, image FROM beercategory";
    }

    $result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {

    echo "<div class='product-image'>
      <div class='product-name'>" . $row["name"] ." </div>
      <img src='" . $row["image"] . "'>
      <div class='product-price'>&euro;". $row["price"] ."</div>
      <div class='order-button'><input type='submit' value='Order'></div>
    </div>";

}
} else {
echo "0 results";
}
$conn->close();
?>
<div id="clearfix"></div>
  </div>
    <?php   include 'inc/footer.php'; ?>

  </body>
</html>
