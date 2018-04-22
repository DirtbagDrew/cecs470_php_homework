#!/usr/local/php5/bin/php-cgi
<?php
$name=$email=$streetAddress=$city=$nameErr=$emailErr=$sAErr=$cityErr="";

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
    $streetAddress = "street Address is required";
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
                <select size=3 name="select1" id="select2" class="selects">
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
      <p><span class="error">* required field</span></p>

      <label for="name">name:</label>
      <input type="text" name="name" value="<?php echo $name;?>">
      <span class="error">* <?php echo $nameErr;?></span>
      <br>
      <label for="email">email:</label>
      <input type="email" name="email" value="<?php echo $email;?>">
      <span class="error">* <?php echo $emailErr;?></span>
      <br>
      <label for="streetAddress"> street address</label>
      <input type="text" name="streetAddress" value="<?php echo $city;?>">
      <span class="error">* <?php echo $sAErr;?></span>
      <br>
      <label for="city">city</label>
      <input type="text" name="city" value="<?php echo $city;?>">
      <span class="error">* <?php echo $cityErr;?></span>
      <br>
      <label for="state">state</label><br>
      <select size=5 name="state">
      	<option <?php if ((isset($state)&& $state=="AL")||isset($state)==false) echo "selected=\"selected\""?> value="AL">AL</option>
      	<option <?php if (isset($state)&& $state=="AK") echo "selected=\"selected\""?> value="AK">AK</option>
      	<option <?php if (isset($state)&& $state=="AR") echo "selected=\"selected\""?> value="AR">AR</option>
      	<option <?php if (isset($state)&& $state=="AZ") echo "selected=\"selected\""?> value="AZ">AZ</option>
      	<option <?php if (isset($state)&& $state=="CA") echo "selected=\"selected\""?> value="CA">CA</option>
      	<option <?php if (isset($state)&& $state=="CO") echo "selected=\"selected\""?> value="CO">CO</option>
      	<option <?php if (isset($state)&& $state=="CT") echo "selected=\"selected\""?> value="CT">CT</option>
      	<option <?php if (isset($state)&& $state=="DC") echo "selected=\"selected\""?> value="DC">DC</option>
      	<option <?php if (isset($state)&& $state=="DE") echo "selected=\"selected\""?> value="DE">DE</option>
      	<option <?php if (isset($state)&& $state=="FL") echo "selected=\"selected\""?> value="FL">FL</option>
      	<option <?php if (isset($state)&& $state=="GA") echo "selected=\"selected\""?> value="GA">GA</option>
      	<option <?php if (isset($state)&& $state=="HI") echo "selected=\"selected\""?> value="HI">HI</option>
      	<option <?php if (isset($state)&& $state=="IA") echo "selected=\"selected\""?> value="IA">IA</option>
      	<option <?php if (isset($state)&& $state=="ID") echo "selected=\"selected\""?> value="ID">ID</option>
      	<option <?php if (isset($state)&& $state=="IL") echo "selected=\"selected\""?> value="IL">IL</option>
      	<option <?php if (isset($state)&& $state=="IN") echo "selected=\"selected\""?> value="IN">IN</option>
      	<option <?php if (isset($state)&& $state=="KS") echo "selected=\"selected\""?> value="KS">KS</option>
      	<option <?php if (isset($state)&& $state=="KY") echo "selected=\"selected\""?> value="KY">KY</option>
      	<option <?php if (isset($state)&& $state=="LA") echo "selected=\"selected\""?> value="LA">LA</option>
      	<option <?php if (isset($state)&& $state=="MA") echo "selected=\"selected\""?> value="MA">MA</option>
      	<option <?php if (isset($state)&& $state=="MD") echo "selected=\"selected\""?> value="MD">MD</option>
      	<option <?php if (isset($state)&& $state=="ME") echo "selected=\"selected\""?> value="ME">ME</option>
      	<option <?php if (isset($state)&& $state=="MI") echo "selected=\"selected\""?> value="MI">MI</option>
      	<option <?php if (isset($state)&& $state=="MN") echo "selected=\"selected\""?> value="MN">MN</option>
      	<option <?php if (isset($state)&& $state=="MO") echo "selected=\"selected\""?> value="MO">MO</option>
      	<option <?php if (isset($state)&& $state=="MS") echo "selected=\"selected\""?> value="MS">MS</option>
      	<option <?php if (isset($state)&& $state=="MT") echo "selected=\"selected\""?> value="MT">MT</option>
      	<option <?php if (isset($state)&& $state=="NC") echo "selected=\"selected\""?> value="NC">NC</option>
      	<option <?php if (isset($state)&& $state=="NE") echo "selected=\"selected\""?> value="NE">NE</option>
      	<option <?php if (isset($state)&& $state=="NH") echo "selected=\"selected\""?> value="NH">NH</option>
      	<option <?php if (isset($state)&& $state=="NJ") echo "selected=\"selected\""?> value="NJ">NJ</option>
      	<option <?php if (isset($state)&& $state=="NM") echo "selected=\"selected\""?> value="NM">NM</option>
      	<option <?php if (isset($state)&& $state=="NV") echo "selected=\"selected\""?> value="NV">NV</option>
      	<option <?php if (isset($state)&& $state=="NY") echo "selected=\"selected\""?> value="NY">NY</option>
      	<option <?php if (isset($state)&& $state=="ND") echo "selected=\"selected\""?> value="ND">ND</option>
      	<option <?php if (isset($state)&& $state=="OH") echo "selected=\"selected\""?> value="OH">OH</option>
      	<option <?php if (isset($state)&& $state=="OK") echo "selected=\"selected\""?> value="OK">OK</option>
      	<option <?php if (isset($state)&& $state=="OR") echo "selected=\"selected\""?> value="OR">OR</option>
      	<option <?php if (isset($state)&& $state=="PA") echo "selected=\"selected\""?> value="PA">PA</option>
      	<option <?php if (isset($state)&& $state=="RI") echo "selected=\"selected\""?> value="RI">RI</option>
      	<option <?php if (isset($state)&& $state=="SC") echo "selected=\"selected\""?> value="SC">SC</option>
      	<option <?php if (isset($state)&& $state=="SD") echo "selected=\"selected\""?> value="SD">SD</option>
      	<option <?php if (isset($state)&& $state=="TN") echo "selected=\"selected\""?> value="TN">TN</option>
      	<option <?php if (isset($state)&& $state=="TX") echo "selected=\"selected\""?> value="TX">TX</option>
      	<option <?php if (isset($state)&& $state=="UT") echo "selected=\"selected\""?> value="UT">UT</option>
      	<option <?php if (isset($state)&& $state=="VT") echo "selected=\"selected\""?> value="VT">VT</option>
      	<option <?php if (isset($state)&& $state=="VA") echo "selected=\"selected\""?> value="VA">VA</option>
      	<option <?php if (isset($state)&& $state=="WA") echo "selected=\"selected\""?> value="WA">WA</option>
      	<option <?php if (isset($state)&& $state=="WI") echo "selected=\"selected\""?> value="WI">WI</option>
      	<option <?php if (isset($state)&& $state=="WV") echo "selected=\"selected\""?> value="WV">WV</option>
      	<option <?php if (isset($state)&& $state=="WY") echo "selected=\"selected\""?> value="WY">WY</option>
      </select>
      <br>



        <button class="submitButton" type="reset" name="reset">reset</button>
        <button class="submitButton" type="submit" name="submit">submit</button>
      </form>
      <button class="saleButton" onclick="infoD()">Information Disclosure</button>

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
    <?php
    // outputs e.g. 'Last modified: March 04 1998 20:43:59.'
    echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
    echo "<br><a href='mailto:andrew.myer@student.csulb.edu'>andrew.myer@student.csulb.edu</a>"
    ?>
  </div>
</body>
</html>
