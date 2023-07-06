<?php

$fn = $_POST["firstName"];
$ln = $_POST["lastName"];
$cn = $_POST["cardNumber"];
$cvv = $_POST["cvv"];
$ba = $_POST["bankAcc"];
$vt = $_POST["validTill"]; 

global $con;
$con = new mysqli("localhost", "root", "", "advistalk");

$sqlCmd = "SELECT MAX(transactionID) AS x FROM transactions";
$resultSet = $con->query($sqlCmd);
$row = $resultSet->fetch_Assoc();
$newID = $row["x"] + 1;

$sqlCmd = "INSERT INTO transactions VALUES($newID, '$fn', '$ln', '$cn', '$cvv', '$ba', '$vt')";
$con->query($sqlCmd);
$con->close();

header("Location: ../html/index.html");

?>