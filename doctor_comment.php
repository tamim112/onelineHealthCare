<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("care",$conn);


if(isset($_POST['patient_text']))
{ $D_EMAIL=$_POST['D_Email'];
    $P_EMAIL=$_POST['P_Email'];
   
$D_COMMENT=$_POST['text'];

}

	
$sql="insert into doctor_comment VALUES('NULL', '$D_EMAIL','$P_EMAIL', '$D_COMMENT')";
    
if (mysql_query($sql))
//echo 'your problem Successfully submitted ';

   header('location:doctor.php');

else
 die(mysql_error());



?>