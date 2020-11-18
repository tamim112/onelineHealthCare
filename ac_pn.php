<?php 


$conn=mysql_connect("localhost","root","");
mysql_select_db("care",$conn);

if(isset($_POST["confirmsignup"]))
{
	$NAME= $_POST["Name"];
	$EMAIL=$_POST["Email"];
	$PASSWORD=$_POST["password"];
$RE_PASSWORD=$_POST["reenterpassword"];

$ADDRESS=$_POST["Address"];

}

if ($PASSWORD != $RE_PASSWORD) {

	echo"<center>";
	echo"<h1>";
	echo "Password does not match";
	echo"</h1>";
	echo"<br>";
	echo"<h1>";
	echo"<a href=patient_ac.php>Back to Form</a>";
	echo"</h1>";
	echo"</center>";
	
	}
	
	else {
		$sql="insert into patient_account VALUES ('NULL','$NAME', '$EMAIL', '$PASSWORD', '$RE_PASSWORD', '$ADDRESS')";
		if (mysql_query($sql))
   header('location:index.php');
	//echo 'Successfully inserted';
	
	else	
	echo"<center>";
	echo"<h1>";
	echo "This Email Already Exist";
	echo"</h1>";
	echo"<br>";
	echo"<h1>";
	echo"<a href=patient_ac.php>Back to Form</a>";
	echo"</h1>";
	echo"</center>";

	
	 //die(mysql_error());
	}





 ?>