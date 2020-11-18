<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("care",$conn);


if(isset($_POST['patient_text']))
{
    $P_EMAIL=$_POST['Email'];
$PROBLEM=$_POST['text'];

}

	
$sql="insert into patient_problem VALUES('NULL', '$P_EMAIL', '$PROBLEM')";
    
if (mysql_query($sql))
//echo 'your problem Successfully submitted ';

   header('location:patient.php');

else
 die(mysql_error());



?>