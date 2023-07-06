<?php

session_start();
$currentUser = $_SESSION["currentUser"];

// reading values from the form 

$category = $_POST["category"];
$subCat = $_POST["subCategory"];
$type = $_POST["type"];
$title = $_POST["title"];
$description = $_POST["description"];
$price = $_POST["price"];
$name = $_POST["name"];
$email = $_POST["email"];
$pn1 = $_POST["phoneNumber1"];
$pn2 = $_POST["phoneNumber2"];
$province = $_POST["province"];

// inserting data into the database
//starting connection with the database
global $con;
$con = new mysqli("localhost", "root", "", "advistalk");
$sqlCmd = "SELECT MAX(adID) AS x FROM advertisement";
$resultSet = $con->query($sqlCmd);
$row = $resultSet->fetch_assoc();
$newID = $row["x"] + 1;

$sqlCmd = "INSERT INTO advertisement VALUES($newID, '$category', '$subCat', '$type', '$title', '$description', $price, '$name', '$email', '$pn1', '$pn2', '$province', '$currentUser')";
$con->query($sqlCmd);
$con->close();


// upload images 

$targetDirectory = "../images/advertisements/";

$targetFile = $targetDirectory."$newID"."a.jpg";
move_uploaded_file($_FILES["adImgUploads1"]["tmp_name"], $targetFile);

$targetFile = $targetDirectory."$newID"."b.jpg";
move_uploaded_file($_FILES["adImgUploads2"]["tmp_name"], $targetFile);

$targetFile = $targetDirectory."$newID"."c.jpg";
move_uploaded_file($_FILES["adImgUploads3"]["tmp_name"], $targetFile);

$targetFile = $targetDirectory."$newID"."d.jpg";
move_uploaded_file($_FILES["adImgUploads4"]["tmp_name"], $targetFile);

$targetFile = $targetDirectory."$newID"."e.jpg";
move_uploaded_file($_FILES["adImgUploads5"]["tmp_name"], $targetFile);

header("Location: ../html/payment.html");                                 

?>