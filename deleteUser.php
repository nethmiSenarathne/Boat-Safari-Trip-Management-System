<?php
	$servername  =  "localhost";
	$username  =  "root";
	$password = "";
	$db = "project";
	
	//create connction
	$conn  =  new mysqli($servername, $username, $password ,$db );
	
	//check connection
	if($conn-> connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected Succesfully";
?>
<?php


$id = $_GET["Cid"];


if(mysqli_query($conn,"DELETE FROM userdetails WHERE id=$id"))
{
  header("location:displayUser.php");
}
else{
  echo "<script>alert('Invalid ID')</script>";
}
mysqli_close($conn);  

?>