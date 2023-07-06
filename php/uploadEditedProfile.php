<?php
//starting session for uploading edited profile
session_start();

if(!isset($_SESSION["currentUser"])){
	header("Location: ../html/login.html");
}
else{
//starting the connection with the database
	global $con;
	$currentUserName = $_SESSION["currentUser"];

	$con = new mysqli("localhost", "root", "", "advistalk");
	$sqlCmd = "SELECT * FROM userprofile WHERE userName = '$currentUserName'";
	$resultSet = $con->query($sqlCmd);
	$row = $resultSet->fetch_assoc();

	$userID = $row["userID"];


	$newFN = $_POST["newFirstName"];
	$newLN = $_POST["newLastName"];
	$newCN = $_POST["newContactNumber"];
	$newUN = $_POST["newUserName"];

	$sqlCmd = "UPDATE userprofile SET firstName = '$newFN', lastName = '$newLN', phoneNumber = '$newCN', userName = '$newUN' WHERE userID = $userID";
	$con->query($sqlCmd);

	$_SESSION["currentUser"] = $newUN;

	$con->close();
//redirecting to the userprofile page
	header("Location: userProfile.php");
}
?>