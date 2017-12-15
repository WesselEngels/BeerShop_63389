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
    <h1>About us</h1>
    <h2>Lorem ipsum dolor sit amet,
       consectetur adipisicing elit,
       sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       Ut enim ad minim veniam,
       quis nostrud exercitation ullamco laboris
       nisi ut aliquip ex ea commodo consequat.
        Duis aute irure dolor in reprehenderit
        in voluptate velit esse cillum dolore
        eu fugiat nulla pariatur.
        Excepteur sint occaecat cupidatat
        non proident, sunt in culpa qui
        officia deserunt mollit anim id est
        laborum.</h2>
    <div id="googleMap"></div>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.609224,5.874645999999984),
    zoom:15,
    position:new google.maps.LatLng(51.609224,5.874645999999984)

};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQtW2ZN5vdnAX7r0Af4X5Jyt7Rc0MWYho&callback=myMap"></script>
<div id="clearfix"></div>
</div>
    <?php   include 'inc/footer.php'; ?>
  </body>
</html>
