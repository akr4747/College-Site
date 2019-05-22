<?php
include 'header.php';
?>

<html>
<head>
  <style>
  .row {
      display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
      padding: 0 4px;
	 
  }
  .column {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
    max-width: 25%;
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

  </style>
<script>
/* function toggle()
{
	if(document.getElementById("gal").style.display=="inline")
	{
		document.getElementById("gal").style.display="none";
	}
	else
	{
		document.getElementById("gal").style.display="inline";
	}
} */
function changeImage(imgn)
{
	document.getElementById("imz").src=imgn;
	document.getElementById("zoom").style.display="inline";
}
function hideimage()
{
	document.getElementById("zoom").style.display="none";
}
</script>
</head>
<body>


<div onclick="toggle()"></div>
<div id="gal">
  <div class="row">
    <div class="column">
    <img src="images/abes.png" width="300px" height="150px" onclick="changeImage('images/abes.png')">
    <img src="images/about_us.jpg" width="300px" height="150px" onclick="changeImage('images/about_us.jpg')">
    <img src="images/class.jpg" width="300px" height="150px" onclick="changeImage('images/class.jpg')">
    <img src="images/01.jpg" width="300px" height="150px" onclick="changeImage('images/01.jpg')">
    </div>
    <div class="column">
    <img src="images/mca.jpg" width="300px" height="150px" onclick="changeImage('images/mca.jpg')">
    <img src="images/cl.jpg" width="300px" height="150px" onclick="changeImage('images/cl.jpg')">
    <img src="images/2.jpg" width="300px" height="150px" onclick="changeImage('images/2.jpg')">
    <img src="images/sap.jpg" width="300px" height="150px" onclick="changeImage('images/sap.jpg')">
    </div>
    <div class="column">
    <img src="images/11.jpg" width="300px" height="150px" onclick="changeImage('images/11.jpg')">
    <img src="images/13.jpg" width="300px" height="150px" onclick="changeImage('images/13.jpg')">
    <img src="images/max.jpg" width="300px" height="150px" onclick="changeImage('images/max.jpg')">
    <img src="images/b1.jpg" width="300px" height="150px" onclick="changeImage('images/b1.jpg')">
   </div>
<div class="column">
<img src="images/btech-4.jpg" width="300px" height="150px" onclick="changeImage('images/btech-4.jpg')">
<img src="images/director.jpg" width="300px" height="150px" onclick="changeImage('images/director.jpg')">
<img src="images/neeraj.png" width="300px" height="150px" onclick="changeImage('images/neeraj.png')">
<img src="images/sir.jpg" width="300px" height="150px" onclick="changeImage('images/sir.jpg')">
</div>
</div>
</div>
<div id="zoom" style="display:none;height:70%;width:70%;border:1px solid gray;position:fixed;left:20%;top:10%; z-index: +1;">
  <div><img src="images/cb1.png"  onclick="hideimage()"></div>
<img width="100%" height="100%" id="imz">
</div>

</body>
</html>


<?php
include 'footer.php';
?>
