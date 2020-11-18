<?php
$username=$_POST['Email'];
$password=$_POST['pass'];

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

$conn=mysql_connect("localhost","root","");
mysql_select_db("care",$conn);
mysql_select_db('login');

$result=mysql_query("SELECT * FROM patient_account where EMAIL='$username' and PASSWORD='$password' ")
or die("Faild to query database".mysql_error());

$row=mysql_fetch_array($result);

if($row['EMAIL']==$username && $row['PASSWORD']==$password){
	//echo " Logged in WELCOME".$row["NAME"];
	header('location:patient.php');
}
else{
	echo"<center>";
	echo"<h1>";
	echo"Faild to Logged in";
	echo"</h1>";
	echo"<br>";
	echo"<h1>";
	echo"<a href=index.php>Back to Home</a>";
	echo"</h1>";
	echo"</center>";

}



//logout
if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['username']);
	header('location:index.php');
}

?>
