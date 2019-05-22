<?php
include 'header.php';
?>

<html>
<head>

<h1><marquee direction="right">AKSHAY KUMAR RAJPUT</marquee></h1>

  <div class="container">

 <script>
	
	var ia=new Array("11.jpg","12.jpg","13.jpg","14.jpg");
	i=0;
    function changeImage()
    {
	  document.getElementById("fimg").src=ia[i];
      i++;
	if(i==4)
	  {
	   i=0;
	  }
		setTimeout("changeImage()",2000);
}

</script>
</head>
<body onload="changeImage()">
<img src="11.jpg" width="100%" height="500px" id="fimg">
</body>


<div class="loader">
<div class="jumbotron">

  <div class="par">
<p><h3 class="text-success">ABES Engineering College is a manifestation of academics heritage with strong belief in Guru-Shishya Parampara!
At this temple of learning, the focus is on human values, academics excellence. We use the four pillar approach by focusing on the
four pillars, Academics, Skill Building, Applied Research, Career Planning.</h3></p></div>


<h1>Our Philosophy</h1>

<div class="pha">
<p><h4 class="pa">ABES Engineering College is a top Engineering college of Ghaziabad and is based on values of propagating the
devotion towards science which is reflected in its symbol Vigyanam: Yagyam: Tanute. Mr Ved Prakash Goel started his
 journey with the same belief to provide amalgamated and eminence education to young minds in Engineering & Management
 Education to convert them into effectual technocrats & committed managers. He wants them to be ready
to combat tough challenges in the competitive world and also substantiate to be a respectable human being.</h4></p></div>

</div>
</div>

</div>
</head>
</html>

<?php
include 'footer.php';
?>
