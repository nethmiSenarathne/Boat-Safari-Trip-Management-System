<?php

require 'connect.php';

$cardNum= $_POST["cardNumber"];
$amount= $_POST["amount"];
$cvv= $_POST["CVV"];
$cardType= $_POST["cardType"];
$customerId= $_POST["CID"];

$sql="INSERT INFO payment(cardNumber,amount,CVV,cardType,CID) VALUES ( $cardNum,$amount,$cvv,'$cardType','customerId')";

if($conn->query($sql)){
	
	echo "<script>alert('Records added successfully!!!')</script>";
}
else {
	echo "<script>alert('ERROR: Could not able to execute the query.'')</script>";
	//echo $sql;
}
?>