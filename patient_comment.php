<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("care",$conn);


if(isset($_POST['patient_text']))
{
    $P_EMAIL=$_POST['P_Email'];
    $D_EMAIL=$_POST['D_Email'];
$P_COMMENT=$_POST['text'];

}

	
$sql="insert into patient_comment VALUES('NULL', '$P_EMAIL','$D_EMAIL', '$P_COMMENT')";
    
if (mysql_query($sql))
//echo 'your problem Successfully submitted ';

   header('location:patient.php');

else
 die(mysql_error());



?>