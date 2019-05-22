<?php
session_start();
error_reporting(E_PARSE | E_ERROR);
include 'header.php';
?>
<?php
// delete a document folder where we upload photo document ....this is a recursive method to delete a folder

if($_SERVER['REQUEST_METHOD']=="POST")
{
	$dirn = "document/".$_SESSION["ad"]."/";
	
	function delete_directory($dirname) 
	{
         if (is_dir($dirname))
           $dir_handle = opendir($dirname);
     if (!$dir_handle)
          return false;
     while($file = readdir($dir_handle)) {
           if ($file != "." && $file != "..") {
                if (!is_dir($dirname."/".$file))
                     unlink($dirname."/".$file);
                else
                     delete_directory($dirname.'/'.$file);
           }
     }
     closedir($dir_handle);
     rmdir($dirname);
     return true;
	}
	 
	delete_directory($dirn);
	
   //	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("abes",$con);
    $qry="DELETE FROM registrations  WHERE admissionnum='".$_SESSION["ad"]."'";
	$r=mysql_query($qry);
	if($r)
	{
		echo "<script>alert('record deleted successfully')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/php/ABES/admission.php">
		<?php
		
	}
	mysql_close($con);
}
?>
<?php
include 'footer.php';
?>