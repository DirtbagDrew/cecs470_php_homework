s1tot=0;
s2tot=0;
s3tot=0;
s4tot=0;
s5tot=0;
s6tot=0;
subTot=0;
shipping=0;
tot=0;
tax=0;
function showMonthlySale() {
    var x = document.getElementById("inventory-item4");
    x.style.display = "block";
}
function updateAll(){
  var a = document.getElementById("select1").value;
  var b = document.getElementById("select2").value;
  var c = document.getElementById("select3").value;
  var d = document.getElementById("select4").value;
  var e = document.getElementById("select5").value;
  var f = document.getElementById("select6").value;

  s1tot=a*20;
  s2tot=b*30;
  s3tot=c*40;
  s4tot=d*50;
  s5tot=e*10;
  s6tot=f*15;
  subTot=s1tot+s2tot+s3tot+s4tot+s5tot+s6tot;
  document.getElementById("st").innerHTML = '<p>$'+subTot+'</p>';
  document.getElementById("q1td").innerHTML = '<p>$'+s1tot+'</p>';
  document.getElementById("q2td").innerHTML = '<p>$'+s2tot+'</p>';
  document.getElementById("q3td").innerHTML = '<p>$'+s3tot+'</p>';
  document.getElementById("q4td").innerHTML = '<p>$'+s4tot+'</p>';
  document.getElementById("q5td").innerHTML = '<p>$'+s5tot+'</p>';
  document.getElementById("q6td").innerHTML = '<p>$'+s6tot+'</p>';
  tax=subTot+shipping;
  tax=tax*.09;
  tot=subTot+shipping+tax;
  document.getElementById("taxtd").innerHTML = '<p>$'+ Number.parseFloat(tax).toFixed(2); +'</p>';
  document.getElementById("tottd").innerHTML = '<p>$'+ Number.parseFloat(tot).toFixed(2); +'</p>';
}
function itemTotal(selectID,price,totID)
{
  var x = document.getElementById(""+selectID+"").value;
  var y = x * price;
  if(selectID=="select1"){
    s1tot=y;
  }
  if(selectID=="select2"){
    s2tot=y;
  }
  if(selectID=="select3"){
    s3tot=y;
  }
  if(selectID=="select4"){
    s4tot=y;
  }
  if(selectID=="select5"){
    s5tot=y;
  }
  if(selectID=="select6"){
    s6tot=y;
  }
  subTot=s1tot+s2tot+s3tot+s4tot+s5tot+s6tot;
  document.getElementById("st").innerHTML = '<p>$'+subTot+'</p>';
  document.getElementById(""+totID+"").innerHTML = '<p>$'+y+'</p>';
  tax=subTot+shipping;
  tax=tax*.09;
  tot=subTot+shipping+tax;
  document.getElementById("taxtd").innerHTML = '<p>$'+ Number.parseFloat(tax).toFixed(2); +'</p>';
  document.getElementById("tottd").innerHTML = '<p>$'+ Number.parseFloat(tot).toFixed(2); +'</p>';
}

function infoD() {
    alert("Your information will not be used for advertizing or be disclosed to any third party. We will only use it to ship your order or contact you if an issue arises.");
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
function shipUpdate()
{
  var x = document.getElementById("ship").value;
  if(x=="0"){
    document.getElementById("shipPrice").innerHTML = '<p>$0</p>';
    document.getElementById("sError").innerHTML = '';
    document.getElementById("cError").innerHTML = '';
    document.getElementById("zError").innerHTML = '';
    shipping=0;
  }
  if(x=="10"){
    document.getElementById("shipPrice").innerHTML = '<p>$10</p>';
    document.getElementById("sError").innerHTML += '<p>*</p>';
    document.getElementById("cError").innerHTML += '<p>*</p>';
    document.getElementById("zError").innerHTML += '<p>*</p>';
    shipping=10;
  }
  if(x=="50"){
    document.getElementById("shipPrice").innerHTML = '<p>$50</p>';
    document.getElementById("sError").innerHTML += '<p>*</p>';
    document.getElementById("cError").innerHTML += '<p>*</p>';
    document.getElementById("zError").innerHTML += '<p>*</p>';
    shipping=50;
  }
  tax=subTot+shipping;
  tax=tax*.09;
  tot=subTot+shipping+tax;
  document.getElementById("taxtd").innerHTML = '<p>$'+ Number.parseFloat(tax).toFixed(2); +'</p>';
  document.getElementById("tottd").innerHTML = '<p>$'+ Number.parseFloat(tot).toFixed(2); +'</p>';
}
function setBackground(e){
if(e.type=="focus"){
  e.target.style.backgroundColor = "#FFE393";
}
else if (e.type == "blur"){
  e.target.style.backgroundColor="white";
}
}

function subCheck(){
  var reqSelector=document.getElementsByClassName("required");
  var error=true;
  for(var i=0;i<reqSelector.length;i++)
  {

    if(reqSelector[i].value=="")
    {
      reqSelector[i].classList.add("error");
      error=false;
    }
    else {
      reqSelector[i].setAttribute("class","required");
    }
  }
  return error;
}

window.addEventListener("load",function(){
  var selector = ".hilightable";
  var fields = document.querySelectorAll(selector);
  for(var i=0; i<fields.length;i++)
  {
    fields[i].addEventListener("focus", setBackground);
    fields[i].addEventListener("blur", setBackground);
  }
})
