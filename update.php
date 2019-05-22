<?php
session_start();
error_reporting(E_PARSE | E_ERROR);
include 'header.php';
?>
<html>
<head>
<body>
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
		$academicqualifi="";
		$year="";
		$admissionnum="";
		$mobile="";
		$email="";
		$dateofbirth="";
		$address="";
		$permanentadd="";
		$country="";
		$graduationpercentage="";
 if($_POST['fn'])
{
	$ad=$_POST['ad'];
	$_SESSION['ad']=$ad;
	
	$con=mysql_connect("localhost","root","");
	if(!$con)
    {
     die("some error - ".mysql_error());
    }
	else
	{
		mysql_select_db("abes",$con);
		$fn=$_POST["fn"];
		$ln=$_POST["ln"];
		$fna=$_POST["fna"];
		$mna=$_POST["mna"];
		$gender=$_POST["gender"];
		$cou=$_POST["cou"];
		$ye=$_POST["ye"];
		$num=$_POST["num"];
		$ma=$_POST["ma"];
		$dob=$_POST["dob"];
		$add=$_POST["add"];
		$padd=$_POST["padd"];
		$country=$_POST["country"];
		$per=$_POST["per"];
		
		$acaq=$_POST["acaq"];
		$acad=implode("-",$acaq);
		
		//print_r($acaq);
		//$qf=" ";
        //$qf=substr_replace($qf ,"", -1);
		
		
        //checkbox
		
		$s="";
		 if (in_array("10", $acaq))
		 {
			 $s=$s."10-";
		 }
		 else
		 {
			 $s=$s."na-";
		 }
		 if (in_array("12", $acaq))
		 {
			 $s=$s."12-";
		 }
		 else
		 {
			 $s=$s."na-";
		 }
		 if (in_array("BSC", $acaq))
		 {
			 $s=$s."BSC-";
		 }
		 else
		 {
			 $s=$s."na-";
		 }
		 if (in_array("BCA", $acaq))
		 {
			 $s=$s."BCA-";
		 }
		 else
		 {
			 $s=$s."na-";
		 }
		 $s=substr_replace($s ,"", -1);
		 // checkbox
		 
		 $path="document/".$ad."/";
		
	     if($_FILES["upf"]["type"]=="image/jpeg" || $_FILES["upf"]["type"]=="image/png")
	      {
			move_uploaded_file($_FILES["upf"]["tmp_name"],$path."photo.jpeg");	
	     }
	     
		 move_uploaded_file($_FILES["upd"]["tmp_name"],$path."10.pdf");
		 move_uploaded_file($_FILES["upd1"]["tmp_name"],$path."12.pdf");
		 move_uploaded_file($_FILES["upd2"]["tmp_name"],$path."graduation.pdf");
		 
		$qry="UPDATE registrations SET firstname='$fn' , lastname='$ln', fathername='$fna', mothername='$mna', gender='$gender', course='$cou', academicsquali='$s', year='$ye', mobile='$num', email='$ma', dateofbirth='$dob', address='$add', permanentadd='$padd', country='$country', graduationpercentage='$per' WHERE admissionnum='".$_SESSION["ad"]."'";
		$r=mysql_query($qry);
		if($r)
		{
			echo "<a href='admission.php'>Check update record</a>";
		}
		else
		{
			echo "record not updated,.<a href='admission.php'>Check update record</a>";
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
<td><label for="First Name">First Name</label><br> <input type="text" onchange="up()" name="fn" value='<?php echo $_POST['fn']; ?>'> </td>
<td><label for="Last Name">Last Name</label><br> <input type="text"   onchange="up()" name="ln" value='<?php echo $_POST['ln']; ?>' id="lname"> </td>
</tr>

<tr>
<td><label for="Father's Name">Father's Name</label><br><input type="text"   name="fna" value='<?php echo $_POST['fna']; ?>' id="fname"> </td>
<td><label for="Mother's Name">Mother's Name</label><br><input type="text"  name="mna" value='<?php echo $_POST['mna']; ?>' id="mname"></td>
</tr>


<tr>

<td><label for="Gender">Gender</label><br>

<input type='radio' name='gender' id='gen1' value='MALE'
<?php
if($gender=='MALE')
{
	echo "checked";
		   
} ?> >MALE

<input type='radio' name='gender' id='gen2' value='FEMALE'
<?php
if($gender=='FEMALE')
{
	echo "checked";
		   
} ?> >FEMALE
</td>

 <td><label for="Course">Course</label><br><input type="text" name="cou" id="cours" value='<?php echo $_POST['cou']; ?>'></td>
 </tr>


 
<tr>
<td><label>Academics qualification</label><br>

<input type="checkbox" name="acaq[]" id="cl1" value="10"
<?php

if (in_array("10", $acaq))
  {
    echo "<input type='checkbox' name='acaq[]' id='cl1' value='10' checked>10";
  }
else
  {
  echo "<input type='checkbox' name='acaq[]' id='cl1' value='10'>10";
  } ?> 
  
  
  
 <input type="checkbox" name="acaq[]" id="cl2" value="12"
  <?php
  if (in_array("12", $acaq))
  {
    echo "<input type='checkbox' name='acaq[]' id='cl2' value='12' checked>12";
  }
else
  {
   echo "<input type='checkbox' name='acaq[]' id='cl2' value='12'>12";
  }
 ?> 

 <input type="checkbox" name="acaq[]" id="bs" value="BSC"
 <?php 
  if (in_array("BSC", $acaq))
  {
    echo "<input type='checkbox' name='acaq[]' id='cl1' value='BSC' checked>BSC";
  }
else
  {
  echo "<input type='checkbox' name='acaq[]' id='cl1' value='BSC'>BSC";
  }
 ?> 
 
 <input type="checkbox" name="acaq[]" id="bc" value="BCA" 
 <?php
  if (in_array("BCA", $acaq))
  {
    echo "<input type='checkbox' name='acaq[]' id='cl1' value='BCA' checked>BCA";
  }
else
  {
   echo "<input type='checkbox' name='acaq[]' id='cl1' value='BCA'>BCA";
  }
 ?> 
</td>



 										   
<td><label>Year</label><br><input type="number" min="1" max="4" name="ye" value='<?php echo $_POST['ye']; ?>'></td></tr>

<tr>
<td><label for="Upload Photo">Upload Photo</label><br>
 <input type="file" name="upf">
 <?php
 $path="document/".$_POST['ad']."/photo.jpeg";
  echo "<img src='$path' height='100' width='80'>";?></td>
 
 
 <td><label for="10">10th<input type="file" name="upd"></label>
      <label for="12">12th<input type="file" name="upd1"></label>
     <label for="Graduation">Graduation<input type="file" name="upd2"></label></td>
</tr>


 <tr>
 <td><label>Admission NUmber</label><br><input type="text" name="ad" value='<?php echo $_POST['ad']; ?>'></td>
 <td><h4>Mobile no</h4><input type="text" name="num" value='<?php echo $_POST['num']; ?>'></td>
 </tr>

 <tr>
 <td><label>E-mail</label><br><input type="email" name="ma" value='<?php echo $_POST['ma']; ?>' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></td>
 <td><label>DateofBirth</label><br><input type="text" name="dob" value='<?php echo $_POST['dob']; ?>'></td>
 </tr>

 

 <tr>
 <td><label>Address</label><br><textarea rows="2" cols="25" onchange="up()" name="add"  id="address" ><?php echo $_POST['add']; ?></textarea></td>
 <td><label>Permanent Address</label><br><textarea rows="2" cols="25" onchange="up()" name="padd"  id="peradd"><?php echo $_POST['padd']; ?></textarea></td>
</tr>

<tr>
	<td><label>COUNTRY</label><br>
 						<select name="country">
 							<option  value="-1" selected>[choose yours]</option>
							<option value="USA"> USA </option>
 								<option value="UK"> UK </option>
 									<option value="INDIA"> INDIA </option>
 									<option value="FRANCE" > FRANCE </option>
 									<option value="AMERICA"> AMERICA </option>
							<?php 
							if($country=='USA')
							{
								echo "<option value='USA' selected> USA </option>";
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
 <td><label>Graduation Percentage</label><br><input type="text" name="per" value='<?php echo $_POST['per']; ?>'></td>
</tr>

<tr>
<td align="right"><input type="submit" value="Update" name="submit"></td>

</tr>

</form>
</table>
</div>

</body>
</head>
</html>
<?php
include 'footer.php';
?>