
var subtotal=0;
var total=0;

function finalCheckout()
{
  var s1cc=document.getElementsByClassName("select1Color");
  s1c=s1cc;
  var s2cc=document.getElementsByClassName("select2Color");
  s2c=s2cc;
  var s3cc=document.getElementsByClassName("select3Color");
  s3c=s3cc;
  var s4cc=document.getElementsByClassName("select4Color");
  s4c=s4cc;
  window.close();
  var newWindow = window.open();

  newWindow.document.write('<!DOCTYPE html>');
  newWindow.document.write('<html lang="en">');
  newWindow.document.write('<head>');
  newWindow.document.write('<meta charset="utf-8">');
  newWindow.document.write('<title>How The Turntables Furniture Store</title>');
  newWindow.document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
  newWindow.document.write('<link rel="stylesheet" href="style.css">');
  newWindow.document.write('<script src="order2.js"></script>');
  newWindow.document.write('</head>');
  newWindow.document.write('<body>');
  newWindow.document.write('<div class="header">');
  newWindow.document.write('<img src="images/banner.jpg" class="hp"  alt="collage of all the characters from the office">');
  newWindow.document.write('<div class="banner-title">');
  newWindow.document.write('<h1>How The Turntables Furniture Store</h1>');
  newWindow.document.write('</div>');
  newWindow.document.write('</div>');
  newWindow.document.write('<div id="nav">');
  newWindow.document.write('<ul>');
  newWindow.document.write('<li><a href="furniture.html">Home</a><li>');
  newWindow.document.write('<li><a href="contact.html">Contact Us</a><li>');
  newWindow.document.write('<li><a href="order.html">Order</a><li>');
  newWindow.document.write('</ul>');
  newWindow.document.write('</div>');
  newWindow.document.write('<div class="row">');
  newWindow.document.write('<div class="leftcolumn">');
  newWindow.document.write('<br>');
  newWindow.document.write('</div>');
  newWindow.document.write('<div class="centercolumn">');
  newWindow.document.write('<h2>Order Summary</h2>');

  if(s1c.length==0)
  {

  }
  else
  {
    for(var i=0;i<s1c.length;i++)
    {
      newWindow.document.write('<p>Round Stool: '+s1c[i].value+', $20</p>');
      subtotal=subtotal+20;
    }
  }
  if(s2c.length==0)
  {

  }
  else
  {
    for(var i=0;i<s2c.length;i++)
    {
      newWindow.document.write('<p>Piano Table: '+s2c[i].value+', $30</p>');
      subtotal=subtotal+30;
    }
  }
  if(s3c.length==0)
  {

  }
  else
  {
    for(var i=0;i<s3c.length;i++)
    {
      newWindow.document.write('<p>Bench Table: '+s3c[i].value+' $40</p>');
      subtotal=subtotal+40;
    }
  }
  if(s4c.length==0)
  {

  }
  else
  {
    for(var i=0;i<s4c.length;i++)
    {
      newWindow.document.write('<p>Stool Table: '+s4c[i].value+', $10</p>');
      subtotal=subtotal+10;
    }
  }
newWindow.document.write('<p>subtotal: $'+subtotal +'</p>');
newWindow.document.write('<p>shipping options (shipping is $10 in 92647 area code, $50 outside of 92647 area code. Pickup is free)</p>')
newWindow.document.write('<form>');
newWindow.document.write('<select name="travel_arriveVia" id="travel_arriveVia" onchange="showfield(this.options[this.selectedIndex].value,'+subtotal+')">');
//newWindow.document.write('<option selected="selected">Please select ...</option>');
newWindow.document.write('<option selected="selected" value="Standard1">Standard in 92647</option>');
newWindow.document.write('<option value="Standard2">Standard outside 92647</option>');
newWindow.document.write('<option value="Pickup">Pickup</option>');
newWindow.document.write('</select>');
newWindow.document.write('<div id="div1"></div>');
newWindow.document.write('<div id="div2"></div>');
newWindow.document.write("<p>We won't use your address for anything but shipping</p>");
newWindow.document.write('<button class="submitButton">Confirm Order</button>');
newWindow.document.write('</form>');
  newWindow.document.write('</div>');
  newWindow.document.write('<div class="rightcolumn">');
  newWindow.document.write('<br>');
  newWindow.document.write('</div>');
  newWindow.document.write('</div>');
  newWindow.document.write('<div id="footer">');
  newWindow.document.write('Latest Update: <!--#echo var="LAST_MODIFIED"-->');
  newWindow.document.write('<br>');
  newWindow.document.write('<a href=mailto:andrew.myer@student.csulb.edu >andrew.myer@student.csulb.edu</a>');
  newWindow.document.write('</div>');
  newWindow.document.write('</body>');
  newWindow.document.write('</html>');
}

function showfield(name,subtotal)
{
  if(name=='Standard1')
  {
    document.getElementById('div1').innerHTML='<p>Shipping Address: </p><input type="text" name="other" />';
    total=subtotal+20;
    document.getElementById('div2').innerHTML='<p>Total: $'+total+'</p>';

  }
  else if (name=='Standard2')
  {
    document.getElementById('div1').innerHTML='<p>Shipping Address: </p><input type="text" name="other" />';
    total=subtotal+50;
    document.getElementById('div2').innerHTML='<p>Total: $'+total+'</p>';
  }
  else
  {
    document.getElementById('div1').innerHTML='';
    total=subtotal;
    document.getElementById('div2').innerHTML='<p>Total: $'+total+'</p>';
  }
}
