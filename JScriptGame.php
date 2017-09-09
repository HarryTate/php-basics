<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="jscriptgame.css">
  <title>
  </title>
</head>
<body>
  <ul>
<li><button id="startTimer" onCLick="startTimer();">Start Timer</button></li>
<button onclick="setTimeout(myFunction, 3000)">Try it</button>
 </ul>
<div id="showtimer">
<span id="displaytime">

</span>

</div>
<div class="divTable" style="width: 100%; border: 1px solid #000;">
<div class="divTableBody">
<div class="divTableRow">
<div class="A1">&nbsp;</div>
<div class="A1">&nbsp;</div>
<div class="A1">&nbsp;</div>
<div class="A1">&nbsp;</div>
<div class="A1">&nbsp;</div>
<div class="A1">&nbsp;</div>
<div class="A1">&nbsp;</div>
<div class="A1">&nbsp;</div>
</div>
<div class="divTableRow">
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
<div class="divTableCell">&nbsp;</div>
</div>


</div>
  <script>
  var prod = ["Hello"];
  //generate random number
var randomNumber = Math.floor((Math.random() * 8) + 1);


var chooseCell = ["A1"];//,"A2","A3","A4","A5","A6","A7","A8"];
document.getElementsByClassName("A1").innerHTML = "hello";
                
/*function GetCell(){
  var count = chooseCell.length;
  var rand = Math.floor(Math.random() * count);
  var generateDivSelect = chooseCell.length[rand];


            var x = document.getElementsByClassName("A1");
                x = "hello";
            }*/







function myFunction() {
  document.getElementById("displaytime").innerHTML = "Time Up";
}



function startTimer(){

  var counter = 100;
  var end = 0;

for(var i = counter; i > end; i--){

  console.log(i);
}
}
startTimer();
//GetCell();
  </script>


</body>





</html>
