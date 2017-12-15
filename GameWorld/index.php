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
      <h1>Welcome to the Beer shop</h1>
      <h3>Beer, it's the best damn drink in the world</h3>
      <div id="brand1" onclick="location.href='bier.php?brand_id=1';">
      </div>
      <div id="brand3" onclick="location.href='bier.php?brand_id=2';">
      </div>
      <div id="brand2" onclick="location.href='bier.php?brand_id=3';">
      </div>
      <div id="clearfix"></div>
  </div>
    <?php   include 'inc/footer.php'; ?>
  </body>
</html>
