<?php
include 'header.php';
?>
<html>
<head>
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
<table class="outline">
<?php
	
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name=$_POST['user'];
		$pass=$_POST['pwd'];
		$flag=0;
		$con=mysql_connect("localhost","root","");
		if(!$con)
		{
			die("some error ".mysql_error());
		}
		mysql_select_db("abes",$con);
		$qry="SELECT username,password from login where username='$name' and password='$pass'";
		
		$r=mysql_query($qry);
		while($row=mysql_fetch_array($r))
		{
			$flag++;
		}
		 if($flag==0)
          {
	         echo"invalid";
          }
           else
           {
             echo "<script>location.href='admission.php';</script>";
            }
	}
?>
<form method="post">

<tr> <td> <h1>Log In</h1></td></tr>
<tr>
<td><label for="username">username</label><input type="text" placeholder="email address or phone number" name="user" required><br></td>
</tr>

<tr>
<td><label for="password">password</label><input type="password" placeholder="password" name="pwd" required></td>
</tr>

<tr>
<td colspan="2" align=center><input type="submit" value="log In"></td>
</tr>
</form>
</table>
</div>
</div>
</body>

</head>
</html>

<?php
include 'footer.php';
?>