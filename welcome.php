<?php
session_start();
session_destroy();
include 'header.php';

if($_SESSION["user_name"]==true)
{
$userprofile=$_SESSION['user_name'];
$con=mysql_connect("localhost","root","");
mysql_select_db("abes",$con);
$qry="select firstname,lastname from registrations where admissionnum='$userprofile'";
$result=mysql_query($qry);
if($re=mysql_fetch_array($result))
{
	echo $re[0]." ".$re[1];
}
$path="document/".$userprofile."/photo.jpeg";

echo "<img src='$path' height='100' width='80'>";
}
else
{
	header('location:login.php');
}
?>

<form method="post">
<input type="submit" value="logout">
</form>

<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
echo "<script>location.href='login.php';</script>";	
}
?>
<table align="center">
<tr>
<td><h1>MCA</h1>
<h3>3rd SEMESTER ST1 PAPER</h3>
<a href='download/aa.pdf'>Download</a><br>
<a href='download/aa.pdf'>Download</a><br>
<a href='download/aa.pdf'>Download</a></td></tr>
</table>
<?php
include 'footer.php'
?>