<?php
include_once 'connect.php';
?>

<?php

$ID =$_post['Cid'];
$Name =$_post['cName'];
$DOB =$_post['cDOB'];
$Contact =$_post['cTelno'];
$Email =$_post['cEmail'];
$ADD =$_post['cAddress'];

$sql ="UPDATE userdetails SET fname='$Name',dob='$DOB',tpnumber='$Contact',mail='$Email',add='$ADD' where id='$ID'";
if(mysqli_query($conn,$sql)){
	header("location:updateprofile.html");
}
else{
	 echo "<script> alert('Try again')</script>";
}
	 
mysqli_close($conn);
?>