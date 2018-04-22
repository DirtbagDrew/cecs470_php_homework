
function formQuantity()
{
    var s1=document.getElementById("select1");
    var select1 = s1.options[s1.selectedIndex].value;

    var s2=document.getElementById("select2");
    var select2 = s2.options[s2.selectedIndex].value;

    var s3=document.getElementById("select3");
    var select3 = s3.options[s3.selectedIndex].value;

    var s4=document.getElementById("select4");
    var select4 = s4.options[s4.selectedIndex].value;
    if(select1+select2+select3+select4==0)
    {
      alert('no quantity selected');
      return false;
    }
    else
    {
      document.open();
      document.write('<!DOCTYPE html>');
      document.write('<html lang="en">');
      document.write('<head>');
      document.write('<meta charset="utf-8">');
      document.write('<title>How The Turntables Furniture Store</title>');
      document.write('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
      document.write('<link rel="stylesheet" href="style.css">');
      document.write('<script src="order2.js"></script>');
      document.write('</head>');
      document.write('<body>');
      document.write('<div class="header">');
      document.write('<img src="images/banner.jpg" class="hp"  alt="collage of all the characters from the office">');
      document.write('<div class="banner-title">');
      document.write('<h1>How The Turntables Furniture Store</h1>');
      document.write('</div>');
      document.write('</div>');
      document.write('<div id="nav">');
      document.write('<ul>');
      document.write('<li><a href="furniture.html">Home</a><li>');
      document.write('<li><a href="contact.html">Contact Us</a><li>');
      document.write('<li><a href="order.html">Order</a><li>');
      document.write('</ul>');
      document.write('</div>');
      document.write('<div class="row">');
      document.write('<div class="leftcolumn">');
      document.write('<br>');
      document.write('</div>');
      document.write('<div class="centercolumn">');
      document.write('<h2>Customize Order</h2>');
      document.write('<form method="get" action="xx" id="mainForm2" onsubmit="return finalCheckout()">');

      if(select1==0)
      {

      }
      else
      {
        document.write('<div class="row">');
        for(var i=0;i<select1;i++)
        {
          var j=i+1;
          document.write('<div class="inventory-item">');
          document.write('<label for="select1">Round Stool '+j+'</label>');
          document.write('<img src="images/t2.jpeg" class="checkbox-image" alt="table 2">');
          document.write('<p>Preferred Color</p>');
          document.write('<select size=3 name="select1'+j+'" id="select1'+j+'" class="select1Color">');
          document.write('<option selected="selected" value="Mahogany">Mahogany</option>');
          document.write('<option value="Maple">Maple</option>');
          document.write('<option value="Pine">Pine</option>');
          document.write('<option value="Oak">Oak</option>');
          document.write('</select>');
          document.write('</div>');
        }
        document.write('</div>');
      }

      if(select2==0)
      {

      }
      else
      {
        document.write('<div class="row">');
        for(var i=0;i<select2;i++)
        {
          var j=i+1;
          document.write('<div class="inventory-item">');
          document.write('<label for="select2">Piano Table '+j+'</label>');
          document.write('<img src="images/t1.JPG" class="checkbox-image" alt="table 1">');
          document.write('<p>Preferred Color</p>');
          document.write('<select size=3 name="select2'+j+'" id="select2'+j+'" class="select2Color">');
          document.write('<option selected="selected" value="Mahogany">Mahogany</option>');
          document.write('<option value="Maple">Maple</option>');
          document.write('<option value="Pine">Pine</option>');
          document.write('<option value="Oak">Oak</option>');
          document.write('</select>');
          document.write('</div>');
        }
        document.write('</div>');
      }

      if(select3==0)
      {

      }
      else
      {
        document.write('<div class="row">');
        for(var i=0;i<select3;i++)
        {
          var j=i+1;
          document.write('<div class="inventory-item">');
          document.write('<label for="select3">Bench Table '+j+'</label>');
          document.write('<img src="images/t3.jpg" class="checkbox-image" alt="table 3">');
          document.write('<p>Preferred Color</p>');
          document.write('<select size=3 name="select3'+j+'" id="select3'+j+'" class="select3Color">');
          document.write('<option selected="selected" value="Mahogany">Mahogany</option>');
          document.write('<option value="Maple">Maple</option>');
          document.write('<option value="Pine">Pine</option>');
          document.write('<option value="Oak">Oak</option>');
          document.write('</select>');
          document.write('</div>');
        }
        document.write('</div>');
      }

      if(select4==0)
      {

      }
      else
      {
        document.write('<div class="row">');
        for(var i=0;i<select4;i++)
        {
          var j=i+1;
          document.write('<div class="inventory-item">');
          document.write('<label for="select4">Stool Table '+j+'</label>');
          document.write('<img src="images/t4.jpg" class="checkbox-image" alt="table 4">');
          document.write('<p>Preferred Color</p>');
          document.write('<select size=3 name="select4'+j+'" id="select4'+j+'" class="select4Color">');
          document.write('<option selected="selected" value="Mahogany">Mahogany</option>');
          document.write('<option value="Maple">Maple</option>');
          document.write('<option value="Pine">Pine</option>');
          document.write('<option value="Oak">Oak</option>');
          document.write('</select>');
          document.write('</div>');
        }
        document.write('</div>');
      }
      document.write('<br><button class="submitButton" type="submit" name="submit">submit</button>');
      document.write('</form>');
      document.write('</div>');
      document.write('<div class="rightcolumn">');
      document.write('<br>');
      document.write('</div>');
      document.write('</div>');
      document.write('<div id="footer">');
      document.write('Latest Update: <!--#echo var="LAST_MODIFIED"-->');
      document.write('<br>');
      document.write('<a href=mailto:andrew.myer@student.csulb.edu >andrew.myer@student.csulb.edu</a>');
      document.write('</div>');
      document.write('</body>');
      document.write('</html>');

  }
/*  var s1=document.getElementById("select1");
  var select1 = s1.options[s1.selectedIndex].value;

  var s2=document.getElementById("select2");
  var select2 = s2.options[s2.selectedIndex].value;

  var s3=document.getElementById("select3");
  var select3 = s3.options[s3.selectedIndex].value;

  var s4=document.getElementById("select4");
  var select4 = s4.options[s4.selectedIndex].value;
  */

  return true;
}
function showMonthlySale() {
    var x = document.getElementById("inventory-item4");
    x.style.display = "block";
}

function outputCartRow(file,index, title, quantity, price,total){
    document.write("<tr>");
    document.write("<td><img style=\"max-width: 50%;height: auto;\" src="+file+" alt="+""+"></td>");
    document.write("<td>"+title+"</td>");
    document.write("<td>"+quantity+"</td>");
    document.write("<td>$"+financial(price)+"</td>");
    document.write("<td>$"+financial(total)+"</td>");
    document.write("</tr>");
}
