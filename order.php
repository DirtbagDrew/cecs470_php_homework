#!/usr/local/php5/bin/php-cgi
<?php
$genres=array("Abstract", "Baroque", "Gothic", "Renaissance");
$subjects=array("Animals", "Landscape", "People");
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
        <h2>Furniture Order Form</h2>
        <table class="table-fill">
          <thead>
            <tr>
              <th>Product</th>
						  <th>Title</th>
              <th>#</th>
              <th>Price</th>
              <th>Amount</th>
            </tr>
          </thead>
          <tbody>
				      <script> outputCartRow("images/t2.jpeg",1,"Round Stool",2,20,40);</script>
          </tbody>
        </table>

        <!--<button class="saleButton" onclick="showMonthlySale()">Click To See Item of the Month!</button>
        <form method="get" action="xx" id="mainForm" onsubmit="return formQuantity()">
          <div class="row">
            <div class="inventory-item">
              <h3>Round Stool $20</h3>
              <img src="images/t2.jpeg" class="checkbox-image" alt="table 2">
              <label for="select1">Quantity</label><br>
              <select size=3 name="select1" id="select1" class="selects">
                <option selected="selected" value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            </div>
            <div class="inventory-item">
              <h3>Piano Table $30</h3>
              <img src="images/t1.JPG" class="checkbox-image" alt="table 1">
              <label for="select2">Quantity</label><br>
              <select size=3 name="select2" id="select2" class="selects">
              <option selected="selected" value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
          </div>
          <div class="inventory-item">
            <h3>Bench Table $40</h3>
            <img src="images/t3.jpg" class="checkbox-image" alt="table 3">
            <label for="select3">Quantity</label><br>
            <select size=3 name="select3" id="select3" class="selects">
              <option selected="selected" value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
          </select>
        </div>
        <div class="inventory-item" id="inventory-item4" style="display: none;">
          <h3>Stool Table $10</h3>
          <img src="images/t4.jpg" class="checkbox-image" alt="table 4">
          <label for="select4">Quantity</label><br>
          <select size=3 name="select4" id="select4" class="selects">
            <option selected="selected" value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
      </div>
        </div>
        <button class="submitButton" type="submit" name="submit">submit</button>
      </form>-->
      </div>
      <div class="rightcolumn">
        <br>
      </div>
  </div>
  <div id="footer">
    Latest Update: <!--#echo var="LAST_MODIFIED"-->
    <br>
    <a href=mailto:andrew.myer@student.csulb.edu >andrew.myer@student.csulb.edu</a>
  </div>
</body>
</html>
