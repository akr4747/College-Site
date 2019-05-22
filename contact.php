<?php
error_reporting(E_PARSE | E_ERROR);
include 'header.php';
?>

<html>
<body>
<head>
  <div id="contact">
<div class="container">

<?php
	$con=mysql_connect("localhost","root","");
		mysql_select_db("abes",$con);
if(isset($_POST["user"]))
{
	$user1=$_POST['user'];
	$ma2=$_POST['ma'];
	$ph3=$_POST['ph'];
	$mess4=$_POST['mess'];
	

	if(!$con)
	{
		die("some error -".mysql_error());
	}
	else
	{
		$qry="Insert into contact values('$user1','$ma2','$ph3','$mess4')";
		mysql_query($qry);
		echo "successfully inserted";
		
	}
	mysql_close($con);
}


?>
<h1>Contact Us</h1>

<table>
<tr>
<td><img src="images/ab.jpg"><br>
<img src="images/placeholder.png">ABES Engineering College<br>
                                  Campus -1, 19th KM Stone, NH-24,<br> Ghaziabad U.P., India<br>
<img src="images/call.png">Call : +91-120-7135112, 7135113<br>
<img src="images/fax.png">Fax : +91-120-7135115<br>
<img src="images/envelope.png">info@abes.ac.in</td>

<td><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.881308741484!2d77.4429448146802!3d28.633319182417498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee3d2df45167%3A0x3942e55a855965a9!2sABES+Engineering+College!5e0!3m2!1sen!2sin!4v1536694957448" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<br>
<form action="contact.php" method="post" enctype="multipart/form-data">
Name<input type="text" name="user" required><br><br>
E-mail<input type="emial" name="ma" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br><br>
Mobile<input type="text" name="ph" required><br><br>
Message<textarea rows="2" cols="25" name="mess" required></textarea><br><br>
<input type="submit" value="submit"><br><br>
</form>
</td>
</tr>
</table>
</div>
</div>

<div class="container" style="margin-left:410px">
<table>
<?php
if(isset($_POST["comment"]))
{
	$comm=$_POST['comment'];
	$from1=$_POST['from'];
	if(!$con)
	{
		die ("some error -".mysql_error());
	}
	else
	{
	$qry=$qry="INSERT into comment values('$from1','$comm')";
	mysql_query($qry);
	}
}
?>
<h4>Comment</h4>
<form method="POST">
<textarea rows="2" cols="70" name="comment" placeholder="comment here......."></textarea><br>
From<input type="text" name="from" required>
<input type="submit" >
</form>
</table>
</div>

</head>


<style>
table
	{
		padding:10px;
		margin-top:10px;
	 }
</style>
<table border=1 cellpadding=10 align="center">
<?php
	$q="select * from comment";
	
	$data=mysql_query($q);
	
	while($r=mysql_fetch_array($data))
	{
		echo "<tr><td>{$r[0]}</td><td>{$r[1]}</td></tr>";
	}
?>
</table>
</body>
</html>
<?php
include 'footer.php';
?>
