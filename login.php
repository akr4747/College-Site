<?php
session_start();
include 'header.php';
?>
<html>
<body>
<style>

 .outline
 {

   height:300px;
   width: 300px;
   margin-left: 400px;
   margin-top: 50px;
   background-color: #ADD8E6;
   box-shadow: 10px 10px 10px 10px grey;

 }
</style>
<div class="table-responsive">
<div id="outer" class="jumbotron container">
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	$name=$_POST['unm'];
    $pass=$_POST['pwd'];
	$flag=0;
	$con=mysql_connect("localhost","root","");
	if(!$con)
	{
		die("some error - ".mysql_error());
	}
	
		mysql_select_db("abes",$con);
		$qry="select `admissionnum`,password from registrations where admissionnum='$name' and password='$pass'";
		
		$result=mysql_query($qry);
		while($row=mysql_fetch_array($result))
        {
	     $flag++;
        }
          if($flag==0)
          {
	         echo"invalid";
          }
           else
           {
			   $_SESSION['user_name']=$name;
              echo "<script>location.href='welcome.php';</script>";
            }
		
}
?>

<table class="outline">
<form method="post">

<tr> <td> <h1>Log In</h1></td></tr>
<tr>
<td><label for="username">username</label><input type="text" placeholder="email address or phone number" name="unm" required><br></td>
</tr>

<tr>
<td><label for="password">password</label><input type="password" placeholder="password" name="pwd" required></td>
</tr>


<tr>
<td colspan="2" align=center><input type="submit" value="log In"></td>
</tr>

<tr>
<td colspan="2" align=center><h4>---------or---------</h4></td>
</tr>

<tr>
<td colspan="2" align=center><a href="form.php"><input type="button" value="Create New Account" type="submit"></td>
</tr>


</form>
</table>
</div>
</div>
</body>
</html>

<?php
include 'footer.php';
?>
