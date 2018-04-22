#!/usr/local/php5/bin/php-cgi
<?php
$q1=$q2=$q3=$q5=$q5=$q6=$name=$email=$streetAddress=$city=$state=$nameErr=$emailErr=$sAErr=$cityErr="";

if($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $cityErr = "streetAddress is required";
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
        <h2>Furniture Order Form</h2>
        <button class="saleButton" onclick="showMonthlySale()">Click To See Item of the Month!</button>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table class="table-fill">
          <thead>
            <tr>
              <th class="productTH"><p>Product</p></th>
						  <th><p>Title</p></th>
              <th><p>Quantity</p></th>
              <th><p>Price</p></th>
              <th><p>Amount</p></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img src="images/t2.jpeg" alt=" " class="orderImage"></td>
              <td><p>Round Stool</p></td>
              <td>
                <label for="select1">Quantity</label><br>
                <select size=3 name="select1" id="select1" class="selects">
                  <option <?php if ((isset($q1)&& $q1=="0")||isset($q1)==false) echo "selected=\"selected\""?> value="0">0</option>
                  <option <?php if (isset($q1)&& $q1=="1") echo "selected=\"selected\""?> value="1">1</option>
                  <option <?php if (isset($q1)&& $q1=="2") echo "selected=\"selected\""?> value="2">2</option>
                  <option <?php if (isset($q1)&& $q1=="3") echo "selected=\"selected\""?> value="3">3</option>
              </td>
              <td><p>20</p></td>
              <td></td>
            </tr>

            <tr>
              <td><img src="images/t2.jpeg" alt=" " class="orderImage"></td>
              <td><p>Round Stool</p></td>
              <td>
                <label for="select1">Quantity</label><br>
                <select size=3 name="select1" id="select1" class="selects">
                  <option <?php if ((isset($q2)&& $q2=="0")||isset($q2)==false) echo "selected=\"selected\""?> value="0">0</option>
                  <option <?php if (isset($q2)&& $q2=="1") echo "selected=\"selected\""?> value="1">1</option>
                  <option <?php if (isset($q2)&& $q2=="2") echo "selected=\"selected\""?> value="2">2</option>
                  <option <?php if (isset($q2)&& $q2=="3") echo "selected=\"selected\""?> value="3">3</option>
              </td>
              <td><p>20</p></td>
              <td></td>
            </tr>

            <tr>
              <td><img src="images/t2.jpeg" alt=" " class="orderImage"></td>
              <td><p>Round Stool</p></td>
              <td>
                <label for="select1">Quantity</label><br>
                <select size=3 name="select2" id="select2" class="selects">
                  <option <?php if ((isset($q3)&& $q3=="0")||isset($q3)==false) echo "selected=\"selected\""?> value="0">0</option>
                  <option <?php if (isset($q3)&& $q3=="1") echo "selected=\"selected\""?> value="1">1</option>
                  <option <?php if (isset($q3)&& $q3=="2") echo "selected=\"selected\""?> value="2">2</option>
                  <option <?php if (isset($q3)&& $q3=="3") echo "selected=\"selected\""?> value="3">3</option>
              </td>
              <td><p>20</p></td>
              <td></td>
            </tr>

            <tr>
              <td><img src="images/t2.jpeg" alt=" " class="orderImage"></td>
              <td><p>Round Stool</p></td>
              <td>
                <label for="select1">Quantity</label><br>
                <select size=3 name="select3" id="select3" class="selects">
                  <option <?php if ((isset($q4)&& $q4=="0")||isset($q4)==false) echo "selected=\"selected\""?> value="0">0</option>
                  <option <?php if (isset($q4)&& $q4=="1") echo "selected=\"selected\""?> value="1">1</option>
                  <option <?php if (isset($q4)&& $q4=="2") echo "selected=\"selected\""?> value="2">2</option>
                  <option <?php if (isset($q4)&& $q4=="3") echo "selected=\"selected\""?> value="3">3</option>
              </td>
              <td><p>20</p></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        <div id="inventory-item4" style="display: none;">
        <table class="table-fill">
          <thead>
            <tr>
              <th class="productTH"><p>Sale Items</p></th>
						  <th><p>Title</p></th>
              <th><p>Quantity</p></th>
              <th><p>Price</p></th>
              <th><p>Amount</p></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img src="images/t2.jpeg" alt=" " class="orderImage"></td>
              <td><p>Round Stool</p></td>
              <td>
                <label for="select1">Quantity</label><br>
                <select size=3 name="select1" id="select1" class="selects">
                  <option <?php if ((isset($q5)&& $q5=="0")||isset($q5)==false) echo "selected=\"selected\""?> value="0">0</option>
                  <option <?php if (isset($q5)&& $q5=="1") echo "selected=\"selected\""?> value="1">1</option>
                  <option <?php if (isset($q5)&& $q5=="2") echo "selected=\"selected\""?> value="2">2</option>
                  <option <?php if (isset($q5)&& $q5=="3") echo "selected=\"selected\""?> value="3">3</option>
              </td>
              <td><p>20</p></td>
              <td></td>
            </tr>

            <tr>
              <td><img src="images/t2.jpeg" alt=" " class="orderImage"></td>
              <td><p>Round Stool</p></td>
              <td>
                <label for="select1">Quantity</label><br>
                <select size=3 name="select1" id="select1" class="selects">
                  <option <?php if ((isset($q6)&& $q6=="0")||isset($q6)==false) echo "selected=\"selected\""?> value="0">0</option>
                  <option <?php if (isset($q6)&& $q6=="1") echo "selected=\"selected\""?> value="1">1</option>
                  <option <?php if (isset($q6)&& $q6=="2") echo "selected=\"selected\""?> value="2">2</option>
                  <option <?php if (isset($q6)&& $q6=="3") echo "selected=\"selected\""?> value="3">3</option>
              </td>
              <td><p>20</p></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <label for="name">name:</label>
      <input type="text" name="name" value="name">
      <br>
      <label for="email">email:</label>
      <input type="email" name="email" value="enter a valid email">
      <br>
      <label for="streetAddress"> street address</label>
      <input type="text" name="streetAddress" value="street address">
      <br>
      <label for="city">city</label>
      <input type="text" name="city" value="city">
      <br>
      <label for="state">state</label><br>
      <select size=5 name="state">
      	<option selected="selected" value="AL">AL</option>
      	<option value="AK">AK</option>
      	<option value="AR">AR</option>
      	<option value="AZ">AZ</option>
      	<option value="CA">CA</option>
      	<option value="CO">CO</option>
      	<option value="CT">CT</option>
      	<option value="DC">DC</option>
      	<option value="DE">DE</option>
      	<option value="FL">FL</option>
      	<option value="GA">GA</option>
      	<option value="HI">HI</option>
      	<option value="IA">IA</option>
      	<option value="ID">ID</option>
      	<option value="IL">IL</option>
      	<option value="IN">IN</option>
      	<option value="KS">KS</option>
      	<option value="KY">KY</option>
      	<option value="LA">LA</option>
      	<option value="MA">MA</option>
      	<option value="MD">MD</option>
      	<option value="ME">ME</option>
      	<option value="MI">MI</option>
      	<option value="MN">MN</option>
      	<option value="MO">MO</option>
      	<option value="MS">MS</option>
      	<option value="MT">MT</option>
      	<option value="NC">NC</option>
      	<option value="NE">NE</option>
      	<option value="NH">NH</option>
      	<option value="NJ">NJ</option>
      	<option value="NM">NM</option>
      	<option value="NV">NV</option>
      	<option value="NY">NY</option>
      	<option value="ND">ND</option>
      	<option value="OH">OH</option>
      	<option value="OK">OK</option>
      	<option value="OR">OR</option>
      	<option value="PA">PA</option>
      	<option value="RI">RI</option>
      	<option value="SC">SC</option>
      	<option value="SD">SD</option>
      	<option value="TN">TN</option>
      	<option value="TX">TX</option>
      	<option value="UT">UT</option>
      	<option value="VT">VT</option>
      	<option value="VA">VA</option>
      	<option value="WA">WA</option>
      	<option value="WI">WI</option>
      	<option value="WV">WV</option>
      	<option value="WY">WY</option>
      </select>
      <br>



        <button class="submitButton" type="reset" name="reset">reset</button>
        <button class="submitButton" type="submit" name="submit">submit</button>
      </form>

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
