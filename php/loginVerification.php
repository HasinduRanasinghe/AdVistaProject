<?php
	
//Getting form data and store in variables
$userNameInput = $_POST["userNameLogin"];
$passwordInput = $_POST["passwordLogin"];

//Starting a session 
session_start();

//Creating a connection with database
global $con;
$con = new mysqli("localhost", "root", "", "advistalk");

//SQL Query 
$sqlCmd = "SELECT * FROM userprofile WHERE userName = '$userNameInput' AND password = '$passwordInput'";

$resultSet = $con->query($sqlCmd);
$con->close();

//Checking whether the resuslts are available or not 
if ($resultSet->num_rows > 0) {

	$_SESSION["currentUser"] = $userNameInput;

    //Immediate direction to the User Profile
	header("Location: userProfile.php"); 	
}
else{

	//JavaScript code to direct user to relevent pages if login details are not available
	
	echo '<script>

	 if(confirm("Invalid username or password"))
	 {
	 	window.location.replace("../html/login.html");
	 }
	 else
	 {
	 	window.location.replace("../html/index.html");
	 } 

	 </script>';
	
}

?>