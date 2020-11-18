<?php 
$conn=mysql_connect("localhost","root","");
mysql_select_db("care",$conn);

if(isset($_POST["confirmsignup"]))
{
	$NAME=$_POST["Name"];
	$EMAIL=$_POST["Email"];
	$PASSWORD=$_POST["password"];
$RE_PASSWORD=$_POST["reenterpassword"];
$DEG=$_POST["Designation"];
$SPEACILST=$_POST['special'];
$ADDRESS=$_POST["Address"];

}
if ($PASSWORD != $RE_PASSWORD) {

	echo"<center>";
	echo"<h1>";
	echo"Password Does not Match";
	echo"</h1>";
	echo"<br>";
	echo"<h1>";
	echo"<a href=doctor_ac.php>Back to Form</a>";
	echo"</h1>";
	echo"</center>";

	}
	
	else {
	
$sql="insert into doctor_account VALUES('NULL','$NAME', '$EMAIL', '$PASSWORD', '$RE_PASSWORD', '$DEG','$SPEACILST', '$ADDRESS')";
	if (mysql_query($sql))
   header('location:index.php');
//echo 'Successfully inserted';
else
 die(mysql_error());
 
	}





 ?>