<?php

//capturing the ID of the advertisement to be deleted 
$adID = intval($_GET["adID"]);

//starting the connection with the database
global $con;
$con = new mysqli("localhost", "root", "", "advistalk");
$sqlCmd = "DELETE FROM advertisement WHERE adID = $adID";
$con->query($sqlCmd);
$con->close();

//delete images in the advertisement

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

header("Location: ../php/userProfile.php");

?>