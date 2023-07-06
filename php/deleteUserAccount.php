/*delete user account*/
<?php
//starting session
session_start();

//starting connection with the database
global $con;
$con = new mysqli("localhost", "root", "", "advistalk");
$toBeDeleted = $_SESSION["currentUser"];

$sqlCmd = "SELECT * FROM userprofile WHERE userName = '$toBeDeleted'";
$resultSet = $con->query($sqlCmd);
$row = $resultSet->fetch_assoc();
$userID = intval($row["userID"]);

//delete user and user image

$sqlCmd = "DELETE FROM userprofile WHERE userName = '$toBeDeleted'";
$con->query($sqlCmd);

$imageToBeDeleted = "../images/userprofilePictures/". $userID . ".jpg";
unlink($imageToBeDeleted);

//delete ad and adimages 

$sqlCmd = "SELECT * FROM advertisement WHERE firstUsername = '$toBeDeleted'";
$resultSet = $con->query($sqlCmd);

if ($resultSet->num_rows > 0) {
	
	while ($row = $resultSet->fetch_assoc()) {
		
		$adID = intval($row["adID"]);
		$sqlCmd = "DELETE FROM advertisement WHERE adID = $adID";
		$con->query($sqlCmd);

		$imageToBeDeleted = "../images/advertisements/".$adID."a.jpg";
		unlink($imageToBeDeleted);

		$imageToBeDeleted = "../images/advertisements/".$adID."b.jpg";
		unlink($imageToBeDeleted);

		$imageToBeDeleted = "../images/advertisements/".$adID."c.jpg";
		unlink($imageToBeDeleted);

		$imageToBeDeleted = "../images/advertisements/".$adID."d.jpg";
		unlink($imageToBeDeleted);

		$imageToBeDeleted = "../images/advertisements/".$adID."e.jpg";
		unlink($imageToBeDeleted);
	}
}
$con->close();

session_destroy();
//ending session

//redirecting to the home page
header("Location: ../html/index.html");

?>