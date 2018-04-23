#!/usr/local/php5/bin/php-cgi
<?php
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
        <br>
        <a href="test.txt">text</a>
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
