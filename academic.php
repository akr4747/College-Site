<?php
include 'header.php';
?>

<html>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>

</head>

<body  data-spy="scroll" data-target=".navbar" data-offset="50">

  <style>
  body {
      position: relative;
  }
  #section1 {padding-top:50px;width:640px;color: #fff; background-color: #1E88E5;}
  #section41 {padding-top:50px;width:640px;color: #fff; background-color: #00bcd4;}

  </style>

  <div class="container">

  <h1>Academics</h1>
  <div style="font-style:oblique;font-size:25px";>
  <p>At ABESEC students learn the skills and acquire knowledge for entering the professional world with confidence. Clear motives and a powerful self image helps students face the world with confidence and belief.</p></div>

<div style="float:left">
<div id='cssmenu'>
<ul>
   <li class='has-sub'><a href='#'><span>B.Tech</span></a>
      <ul>
         <li><a href='b.tech.php'><span>Civil Engineering</span></a></li>
         <li><a href='b.tech.php'><span>Computer Engineering & Information Technology</span></a></li>
         <li class='last'><a href='b.tech.php'><span>Computer Science & Engineering</span></a></li>
		 <li class='last'><a href='b.tech.php'><span>Electronics & Communication Engineering</span></a></li>
		 <li class='last'><a href='b.tech.php'><span>Electrical & Electronics Engineering</span></a></li>
		 <li class='last'><a href='b.tech.php'><span>Information Technology</span></a></li>
		 <li class='last'><a href='b.tech.php'><span>Mechanical Engineering</span></a></li>
      </ul>
   </li>
   <li class='has-sub'><a href='#'><span>M.Tech</span></a>
      <ul>
         <li><a href='m.tech.php'><span>Master of Technology (CSE)</span></a></li>
         <li class='last'><a href='m.tech.php'><span>Master of Technology (ECE)</span></a></li>
		  <li class='last'><a href='m.tech.php'><span>Master of Technology (ME)</span></a></li>
      </ul>
   </li>
   <li class='last'><a href='mca.php'><span>Master of Computer Application</span></a></li>


</ul>
</div>
</div>



    <div class="row">
      <div class="column">
      <img src="images/btech-1.jpg" width="318px" height="170px" >
      <img src="images/btech-2.jpg" width="318px" height="170px">
    </div>
    <div class="column" style="margin:0px 50px 0px 265px">
    <img src="images/btech-1.jpg" width="318px" height="170px" >
    <img src="images/btech-2.jpg" width="318px" height="170px">
  </div>

<div  id="section1" class="container-fluid" style="margin:0px 50px 0px 265px">
<table align="center" style="width:640px;text-align: justify;">
<tr><td><h1>Under Graduate</h1></td></tr>
  <tr>
  <th>NAME OF THE BRANCH</th>
  <th>BRANCH CODE</th>
  <th>DURATION</th>
  <th>SEATS</th>
</tr>

<tr>
  <td>Civil Engineering</td>
  <td>CE</td>
  <td>4 years</td>
  <td>120</td>
</tr>

<tr>
  <td>Computer Engineering & Information Technology</td>
  <td>CEI</td>
  <td>4 years</td>
  <td>60</td>
</tr>

<tr>
  <td>Computer Science & Engineering</td>
  <td>CSE</td>
  <td>4 years</td>
  <td>180</td>
</tr>

<tr>
  <td>Electronics & Communication Engineering</td>
  <td>ECE</td>
  <td>4 years</td>
  <td>180</td>
</tr>

<tr>
  <td>Electrical & Electronics Engineering</td>
  <td>EN</td>
  <td>4 years</td>
  <td>120</td>
</tr>

<tr>
  <td>Information Technology</td>
  <td>IT</td>
  <td>4 years</td>
  <td>120</td>
</tr>

<tr>
  <td>Mechanical Engineering</td>
  <td>ME</td>
  <td>4 years</td>
  <td>180</td>
</tr>
</table>
</div>
</div>



<div  id="section41" class="container-fluid" style="margin:0px 5px 0px 250px">
<table align="center" style="width:640px;text-align: justify;">
<tr><td><h1>Post Graduate</h1></td></tr>
  <tr>
  <th>NAME OF THE BRANCH</th>
  <th>BRANCH CODE</th>
  <th>DURATION</th>
  <th>SEATS</th>
</tr>

<tr>
  <td>Master of Business Administration</td>
  <td>MBA</td>
  <td>2 years</td>
  <td>120</td>
</tr>

<tr>
  <td>Master of Computer Application</td>
  <td>MCA</td>
  <td>3years/2 years(Lateral Entry)</td>
  <td>120</td>
</tr>

<tr>
  <td>Master of Technology (CSE)</td>
  <td>CSE</td>
  <td>2 years</td>
  <td>18</td>
</tr>

<tr>
  <td>Master of Technology (ECE)</td>
  <td>ECE</td>
  <td>2 years</td>
  <td>18</td>
</tr>

<tr>
  <td>Master of Technology (ME)</td>
  <td>ME</td>
  <td>2 years</td>
  <td>18</td>
</tr>

</table>
</div>




<div class="container">

  <ul class="pager">
    <li><a href="#">&larr;Previous</a></li>
	
	
  <li><a href="b.tech.php">1</a></li>
  <li><a href="m.tech.php">2</a></li>
  <li><a href="mca.php">3</a></li>
   
	 
    <li><a href="#">Next &rarr;</a></li>
  </ul>
</div>

</div>
</body>
</html>

<?php
include 'footer.php';
?>
