<?php

//Getting registration form data and store in variables
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$strt1 = $_POST["street1"];
$strt2 = $_POST["street2"];
$city = $_POST["city"];
$province = $_POST["province"];
$postalCode = $_POST["postalCode"];
$country = $_POST["country"];
$areaCode = $_POST["areaCode"];
$phone = $_POST["phone"];
$userName = $_POST["UN"];
$password = $_POST["PW"];
$passwordConfirmation = $_POST["confirmPW"];

//Creating a connection with database
global $con;
$con = new mysqli("localhost", "root", "", "advistalk");

//Sql Query
$sqlCmd = "SELECT * FROM userprofile WHERE userName = '$userName' OR password = '$password'";
$resultSet = $con->query($sqlCmd);

if($resultSet->num_rows > 0) //If username or password is already in use
{
	echo '<script> alert("The Username or Password has used already !") </script>';
	$con->close();
}
else
{
    //Incrementing the User ID in the database
	$sqlCmd = "SELECT MAX(userID) AS x FROM userprofile";
	$resultSet = $con->query($sqlCmd);
	$row = $resultSet->fetch_assoc();
	$newID = $row["x"] + 1;

	if( $password != $passwordConfirmation) //Password verification
	{
        //Alert the user if password missmathed
		echo '<script> alert("Password missmatched! please try again.") </script>';
		$con->close();
		header("Location: ../html/register.html");
	}
	else
	{
        //Inserting values to the databse if two passwords are identical
		$sqlCmd = "INSERT INTO userprofile VALUES($newID, '$firstName', '$lastName', '$strt1', '$strt2', '$city', '$province', '$postalCode', '$country', '$areaCode', '$phone', '$userName', '$password')";
		$con->query($sqlCmd);
		$con->close();

        //Uploading the picture
		$targetDirectory = "../images/userprofilePictures/";
		$targetFile = $targetDirectory."$newID.jpg";
		move_uploaded_file($_FILES["registerUserImage"]["tmp_name"], $targetFile);

		header("Location: ../html/index.html"); //Immediate direction to the home page
	}
}

?>