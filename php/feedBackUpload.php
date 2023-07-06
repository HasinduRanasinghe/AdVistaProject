
<?php

//data insertion to the database --------------

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$description = $_POST['feedbackDescription'];

// srating connection with the database
global $con;
$con = new mysqli("localhost", "root", "", "advistalk");
$sqlCmd = "SELECT MAX(ID) AS x FROM reviews";
$resultSet = $con->query($sqlCmd);
$row = $resultSet->fetch_assoc();
$newID = $row["x"] + 1;

$sqlCmd = "INSERT INTO reviews VALUES($newID, '$firstName', '$lastName', '$description')";
$con->query($sqlCmd);
$con->close();

//uploading the image to the specified folder ---------------

$targetDirectory = "../images/feedbackImages/";
$targetFile = $targetDirectory . "$newID.jpg";
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);

//redirecting to feedbacks page
header("Location: feedbacks.php");
?>