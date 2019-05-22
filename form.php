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

if(isset($_POST['submit']))
{
	$sessionCaptcha=$_SESSION['captcha'];
	$formCaptcha=$_POST['captcha'];
	if($sessionCaptcha==$formCaptcha)
	{

     if($_SERVER['REQUEST_METHOD']=='POST')
{
	$fn1=$_POST['fn'];
	$ln2=$_POST['ln'];
	$fna3=$_POST['fna'];
	$mna4=$_POST['mna'];
	$gender5=$_POST['gender'];
	$cou6=$_POST['cou'];
	//$acaq7=$_POST['acaq'];
	$ye8=$_POST['ye'];
	$ad9=$_POST['ad'];
	$num10=$_POST['num'];
	$ma11=$_POST['ma'];
	$dob12=$_POST['dob'];
	$add13=$_POST['add'];
	$padd14=$_POST['padd'];
	$country15=$_POST['country'];
	$per16=$_POST['per'];
	$pwd17=$_POST['pwd'];
	$cpw18=$_POST['cpw'];
	
	
	
	$qf="";
	if(isset($_POST["10"]))
	{
		$qf.="10-";
	}
	else
	{
		$qf.="na-";
	}
	
	if(isset($_POST["12"]))
	{
		$qf.="12-";
	}
	else
	{
		$qf.="na-";
	}
	if(isset($_POST["BSC"]))
	{
		$qf.="BSC-";
	}
	else
	{
		$qf.="na-";
	}if(isset($_POST["BCA"]))
	{
		$qf.="BCA-";
	}
	else
	{
		$qf.="na-";
	}
	/*for($i=0;$i<count($acaq7);$i++)
	{
		$qf.=$acaq7[$i]."-";
	}*/
	$qf=substr_replace($qf ,"", -1);
	
	   $path="document/".$ad9."/";
	   
	   mkdir($path,0777,true);
	     if($_FILES["upf"]["type"]=="image/jpeg" || $_FILES["upf"]["type"]=="image/png")
	      {
			move_uploaded_file($_FILES["upf"]["tmp_name"],$path."photo.jpeg");	
	     }
	     else
	     {  
          echo "file format is not valid";   
	     }
		 move_uploaded_file($_FILES["upd"]["tmp_name"],$path."10.pdf");
		 move_uploaded_file($_FILES["upd1"]["tmp_name"],$path."12.pdf");
		 move_uploaded_file($_FILES["upd2"]["tmp_name"],$path."graduation.pdf");
	   
		$con=mysql_connect("localhost","root","");
		if(!$con)
			{
				die("some error - ".mysql_error());
			}
			else
		    {
		    	mysql_select_db("abes",$con);
			    $qry="SELECT * FROM registrations WHERE admissionnum='$ad9'";
			    $r=mysql_query($qry);
			    if(mysql_num_rows($r)>0)
			{
				echo "admission number already exists";
			}
		     else
		    {
                mysql_select_db("abes",$con);
                $qry="Insert into registrations values('$fn1','$ln2','$fna3','$mna4','$gender5','$cou6','$qf','$ye8','$ad9','$num10','$ma11','$dob12','$add13','$padd14','$country15','$per16','$pwd17','$cpw18')";
			                mysql_query($qry);
							echo "Yours registration is sucessfully inserted";
							mysql_close($con);						
							
	        }   
           }
}
	else
	{
	 echo "incorrect captcha";
	}
			
}

}
?>

<div class="table-responsive">
<table   align="center" class="outline">
<form name="myform" action="<?php echo $_SERVER['PHP_SELF'];?>"  onsubmit="return validationform()" method="post" enctype="multipart/form-data">

<tr><td colspan="2" align="left"><h2>STUDENT REGISTRATION FORM</h2></td></tr>


<tr>
<td><label for="First Name">First Name</label><br><input type="text" maxlength="" placeholder="first name" onchange="up()" name="fn" id="fun"></td>
<td><label for="Last Name">Last Name</label><br><input type="text" maxlength="10" placeholder="last name" onchange="up()" name="ln" id="lname"></td>
</tr>

<tr>
<td><label for="Father's Name">Father's Name</label><br><input type="text"  onchange="up()" name="fna" id="fname"></td>
<td><label for="Mother's Name">Mother's Name</label><br><input type="text"  onchange="up()" name="mna" id="mname"></td>
</tr>

<tr>
<td><label for="Gender">Gender</label><br><input type="radio" name="gender" id="gen1" value="MALE">male
		                                      <input type="radio" name="gender" id="gen2" value="FEMALE">female</td>

 <td><label for="Course">Course</label><br><input type="text" onchange="up()" name="cou" id="cours"></td>
 </tr>

 <tr>
 	<td><label for="Upload Photo">Upload Photo</label><br><input type="file" name="upf"></td>
 	<td><label for="Upload Document">Upload Document</label><br><label for="10">10th<input type="file" name="upd"></label>
 		                                                        <label for="12">12th<input type="file" name="upd1"></label>
 											                    <label for="Graduation">Graduation<input type="file" name="upd2"></label></td>
 </tr>

 <tr>
 <td><label>Academics qualification</label><br><input type="checkbox" name="10" id="cl1" value="10">10th
                                               <input type="checkbox" name="12" id="cl2" value="12">12th
									           <input type="checkbox" name="BSC" id="bs" value="BSC">BSc
   								               <input type="checkbox" name="BCA" id="bc" value="BCA">BCA</td>

 <td><label>Year</label><br><input type="number" min="1" max="4" name="ye"></td>
 </tr>

 <tr>
 <td><label>Admission NUmber</label><br><input type="text" name="ad"></td>
 <td><h4>Mobile no</h4><input type="text" name="num"></td>
 </tr>

 <tr>
 <td><label>E-mail</label><br><input type="email" name="ma" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"></td>
 <td><label>DateofBirth</label><br><input type="text" placeholder="dd/mm/yyyy" maxlength="10" name="dob"></td>
 </tr>

 <tr>
 <td><label>Address</label><br><textarea rows="2" cols="25" onchange="up()" name="add" id="address"></textarea></td>
 <td><label>Permanent Address</label><br><textarea rows="2" cols="25" onchange="up()" name="padd" id="peradd"></textarea></td>
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
 						</select>
 								</td>
 <td><label>Graduation Percentage</label><br><input type="text" name="per"></td>
</tr>

<tr>
<td><label>Password</label><br><input type="password" placeholder="enter password" name="pwd"></td>
<td><label>Conform Password</label><br><input type="password" placeholder="conform password" name="cpw"></td>
</tr>

<tr>
<td align="right">
	<h3 align="right">Captcha</h3><input type="text" name="captcha"><img src="captcha.php">
</td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" value="submit" name="submit">
<input type="reset" value="reset"></td>
</tr>

</form>
</table>
</div>
</body>
 <script src="form.js"></script>

</head>
</html>

<?php
include 'footer.php';
?>
