<?php
session_start();
error_reporting(E_PARSE | E_ERROR);
include 'header.php';
?>

<form action="admission.php" method="POST">
admission no<input type="text" name="ad">
<input type="submit" value="submit">
</form>





<style>
	h2
	{
		border-bottom: 5px solid red;
	}
	.outline
	{
     	height:600px;
		width: 500px;
		margin-left: 300px;
		margin-top: 50px;
	    background-color: #89C8C8;
		box-shadow: 10px 10px 10px 10px grey;
	}
	form
	{
		padding:10px;
		font-family: cursive;
	 }
	 input
	 {
		 position: relative;
		 border-radius: 5px;
	 }
	 textarea
	 {
		 box-shadow:5px;
		 position: relative;
		 padding: 10px;
		 border-radius: 5px;
	 }
	 select
	 {
		 box-shadow:2px;
		 position: relative;
		 padding: 10px;
		 margin: 5px;
		 border-radius: 5px;
		 border: none;
	 }
</style>







<?php

            $firstname="";
			$lastname="";
			$fathername="";
			$mothername="";
			$gender="";
			$course="";
			$academicsquali="";
			$year="";	
			$mobile="";
			$admissionnum="";
			$email="";
			$dateofbirth="";
			$address="";
			$permanentadd="";
			$country="";
			$graduationpercentage="";

	    
	    
	
      if($_SERVER['REQUEST_METHOD']=='POST')
      { 
		  $con=mysql_connect("localhost","root","");
	      mysql_select_db("abes",$con);
		  $ad=$_POST['ad'];
	       
	       if(!$con)
	        {
		     die("some error -".mysql_error());
	        }
	       else
	       {
		    $qry="select * from registrations where admissionnum='$ad'";
		    $r=mysql_query($qry);
		    while($row=mysql_fetch_array($r))
		    {
			$firstname=$row[0];
			$lastname=$row[1];
			$fathername=$row[2];
			$mothername=$row[3];
			$gender=$row[4];
			$course=$row[5];
			$academicsquali=$row[6];
			$year=$row[7];	
			$admissionnum=$row[8];
			$mobile=$row[9];
			$email=$row[10];
			$dateofbirth=$row[11];
			$address=$row[12];
			$permanentadd=$row[13];
			$country=$row[14];
			$graduationpercentage=$row[15];	
		   }
		   }
		   mysql_close($con);
	  }
	


?>
<div class="table-responsive">
<table   align="center" class="outline">
<form action="update.php" method="post" enctype="multipart/form-data">

<tr><td colspan="2" align="left"><h2>STUDENT INFORMATION</h2></td></tr>


<tr>
<td><label for="First Name">First Name</label><br> <input type="text" name="fn" value='<?php echo $firstname;?>'> </td>
<td><label for="Last Name">Last Name</label><br> <input type="text"  name="ln" value='<?php echo $lastname;?>' id="lname"> </td>
</tr>

<tr>
<td><label for="Father's Name">Father's Name</label><br><input type="text"   name="fna" value='<?php echo $fathername;?>' id="fname"> </td>
<td><label for="Mother's Name">Mother's Name</label><br><input type="text"  name="mna" value='<?php echo $mothername; ?>' id="mname"></td>
</tr>


<tr>

<td><label for="Gender">Gender</label><br>

<?php
if($gender=='MALE')
{
	echo "<input type='radio' name='gender' id='gen1' value='MALE' checked>male";
	echo "<input type='radio' name='gender' id='gen2' value='FEMALE'>female";
		   
}
else
{
		echo "<input type='radio' name='gender' id='gen1' value='MALE'>male";
	echo "<input type='radio' name='gender' id='gen2' value='FEMALE' checked>female";
		                                      
}
?>
 <td><label for="Course">Course</label><br><input type="text" name="cou" id="cours" value='<?php echo $course; ?>'></td>
 </tr>


 
<tr>
<td><label>Academics qualification</label><br>
<?php
$quali=explode("-",$academicsquali);
$ck10="";
$ck12="";
$ckBSc="";
$ckBCA="";
if($quali[0]=="10")
{
	$ck10="checked";
}
else
	{
		$ck10="na-";
	}
if($quali[1]=="12")
{
	$ck12="checked";
}
else
	{
		$ck12="na-";
	}
	
if($quali[2]=="BSC")
{
	$ckBSc="checked";
}
else
	{
		$ckBSc="na-";
	}
if($quali[3]=="BCA")
{
	$ckBCA="checked";
}
else
	{
		$ckBCA="na-";
	}

?>

  <input type="checkbox" name="acaq[]" id="cl1" value="10" <?php echo $ck10; ?>>10th
  <input type="checkbox" name="acaq[]" id="cl2" value="12"  <?php echo $ck12; ?>>12th                                            
  <input type="checkbox" name="acaq[]" id="bs" value="BSC" <?php echo $ckBSc; ?>>BSc
  <input type="checkbox" name="acaq[]" id="bc" value="BCA" <?php echo $ckBCA; ?>>BCA</td>								          
   								               
											   
<td><label>Year</label><br><input type="number" min="1" max="4" name="ye" value='<?php echo $year; ?>'>

 <?php
 $path="document/".$_POST['ad']."/photo.jpeg";
  echo "<img src='$path' height='100' width='80'>";?></td>
 </tr>
 
 <tr>
 <td><label>Admission NUmber</label><br><input type="text" name="ad" value='<?php echo $admissionnum; ?>'></td>
 <td><h4>Mobile no</h4><input type="text" name="num" value='<?php echo $mobile; ?>'></td>
 </tr>

 <tr>
 <td><label>E-mail</label><br><input type="email" name="ma" value='<?php echo $email; ?>' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></td>
 <td><label>DateofBirth</label><br><input type="text" name="dob" value='<?php echo $dateofbirth; ?>'></td>
 </tr>

 

 <tr>
 <td><label>Address</label><br><textarea rows="2" cols="25" onchange="up()" name="add"  id="address" ><?php echo $address; ?></textarea></td>
 <td><label>Permanent Address</label><br><textarea rows="2" cols="25" onchange="up()" name="padd"  id="peradd"><?php echo $permanentadd; ?></textarea></td>
</tr>

<tr>
	<td><label>COUNTRY</label><br>
 						<select name="country">
 							<option  value="-1" selected>[choose yours]</option>
							<?php 
							if($country=='USA')
							{
								echo "<option value='USA' selected>USA</option>";
							}
							if($country=='UK')
							{
								echo "<option value='UK' selected>UK</option>";
							}
 							if($country=='INDIA')
							{
								echo "<option value='INDIA' selected>INDIA</option>";
							}
							if($country=='FRANCE')
							{
								echo "<option value='FRANCE' selected>FRANCE</option>";
							}
							if($country=='AMERICA')
							{
								echo "<option value='AMERICA' selected>AMERICA</option>";
							}
							?>
 									</select>
 								</td>
 <td><label>Graduation Percentage</label><br><input type="text" name="per" value='<?php echo $graduationpercentage; ?>'></td>
</tr>

<tr>
<td align="center"><input type="submit" value="Update"></td>
</tr>
</form>


<form action="delete.php" method="POST">
<tr align="right"> 
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$adm=$_POST['ad'];
	$_SESSION['ad']=$adm;
}
?>

	<td align="right"><input type="submit"  value="Delete" onclick="return checkdelete()" name="submit"></td></tr>
</form>
</table>


</div>

<script>
function checkdelete()
{
	return confirm('are you really want to delete this data??');
}
</script>

<div align="right">
<form method="post" action="logout.php">
<input type="submit" value="Logout">
<form></div>


<?php
include 'footer.php';
?>