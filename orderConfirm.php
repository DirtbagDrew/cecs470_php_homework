#!/usr/local/php5/bin/php-cgi
<?php
$name=$email=$streetAddress=$city=$nameErr=$emailErr=$sAErr=$cityErr="";
$q1=$q2=$q3=$q4=$q5=$q6=$subtot="0";

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $q1=$_POST["q1"];
  $q2=$_POST["q2"];
  $q3=$_POST["q3"];
  $q4=$_POST["q4"];
  $q5=$_POST["q5"];
  $q6=$_POST["q6"];
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if (empty($_POST["city"])) {
    $cityErr = "city is required";
  } else {
    $city = test_input($_POST["city"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$city)) {
      $cityErr = "Only letters and white space allowed";
    }
  }
  if (empty($_POST["streetAddress"])) {
    $streetAddress = "street Address is required";
  }
  $subtot=$q1*20+$q2*20+$q3*20+$q4*20+$q5*20+$q6*20;
  if(!isset($emailErr))
  {

  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>How The Turntables Furniture Store</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="order.js"></script>
</head>
<body>
<div class="header">
  <img src="images/banner.jpg" class="hp"  alt="collage of all the characters from the office">
  <div class="banner-title">
    <h1>
      How The Turntables Furniture Store
    </h1>
  </div>
  </div>

    <div id="nav">
    <ul>
    <li><a href='furniture.html'>Home</a><li>
    <li><a href='contact.html'>Contact Us</a><li>
    <li><a href='order.php'>Order</a><li>
    </ul>
    </div>
    <div class="row">
    <div class="leftcolumn">
      <br>
    </div>
      <div class="centercolumn">
        <h2>Thank You For You Purchase</h2>
        <br>
        <img src="images/michaelscott.jpg" style="width: 100%" alt="thank you from MS">
        <p>please click on the link below to take you back to the home page</p>
        <br>
        <a href="furniture.html">home</a>
      </div>
      <div class="rightcolumn">
        <br>
      </div>
  </div>
  <div id="footer">
    <?php
    // outputs e.g. 'Last modified: March 04 1998 20:43:59.'
    echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
    echo "<br><a href='mailto:andrew.myer@student.csulb.edu'>andrew.myer@student.csulb.edu</a>"
    ?>
  </div>
</body>
</html>
