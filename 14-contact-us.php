<!DOCTYPE html>
<html lang="en">
<head>
  <title>Paul's Pet Palace</title>
  <meta charset="UTF-8">
  <meta name="description" content="Paul’s Pet Place, where you pet is King & Queen">
  <meta name="keywords" content="pets,cat,cats,dog,dogs,bird,birds,fish,">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/ppp.css">
</head>
<body>

<nav class="topnav">
<span><a href="index.html" class="image"><img src="img/ppplogo.png" alt="PPP Logo" class="logo"></a></span>
  <a href="index.html">Home</a>
  <a href=cats.html">Cats</a>
  <a href="dogs.html">Dogs</a>
  <a href="birds.html">Birds</a>
  <a href="about.html">About</a>
  <a class="active" href="contact-us.html">Contact Us</a>
</nav>

<h1>Contact-Us</h1>
<p>
<?php echo $_POST["Fname"]; ?>,<br/><br/> Thank you for your your interest. We will contact you at <?php echo $_POST["email"]; ?> 
within 24 business hours. We are excited to do business with you.<br/><br/>Thanks again,<br/><br/>Paul's Pet Palace
</p>

<?php
// this creates the email to send to the customer
$msg = "Thank you " . $_POST["Fname"] . "," . "\n\nWe value your business and we will contact you back within 24 business hours. \n\nPaul's Pet Palace";

// this creates the email to send back to me
$msg2 =  $_POST["Fname"] . " " . $_POST["Lname"] . " at " . $_POST["email"] . " sent you a message:" . "\n\n" . $_POST["msgbox"];

// send email to customer
mail($_POST["email"],"Thank you for contacting us!",$msg,'From: david@cablefreedave.com' . "\r\n" .
    'Reply-To: david@cablefreedave.com.com');

// send email to me with customer's message
mail("david1569@gmail.com","Customer inquiry",$msg2);

// Notes:
// $_POST["Variable name"] will give you the results after pressing the submit button.
// If you use headers and specify an E-mail address, the sent message will most likely end up in the spam folder.
?> 

</body>
</html>
