<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pils Shop</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <?php   include 'inc/header.php'; ?>
    <div id="container">
    <?php   include 'inc/menu.php';?>
    <div class="container">
      <?php
      require("inc/connection.php");
      // Escape user inputs for security
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $to = "wesselengels@gmail.com";
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);


        // attempt insert query execution
        // close connection
        $sql = "INSERT INTO contact (firstname, lastname, email, subject) VALUES ('$firstname', '$lastname', '$email', '$subject')";
        if(mysqli_query($conn, $sql)){
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
        mail($to, $firstname, $lastname, $subject);
        header('location: thankyou.html');
        mysqli_close($conn);
      }

       ?>
  <form action="" method="post">
    <label>First Name</label>
    <input type="text" id="fname" autocomplete="off" name="firstname" required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Your First Name')" placeholder="Your name..">

    <label>Last Name</label>
    <input type="text" id="lname" autocomplete="off" name="lastname" required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Your Last Name')" placeholder="Your last name..">

    <label>Email</label>
    <input type="email" id="lname" autocomplete="off" name="email" required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter valid email')" placeholder="Your email..">

    <label>Subject</label>
    <textarea id="subject" name="subject" autocomplete="off" required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Please Enter Something')" placeholder="Write something.." style="height:120px"></textarea>

    <input id="send-button" type="submit" value="Send">
  </form>
</div>
  </div>
    <?php   include 'inc/footer.php'; ?>
  </body>
</html>
