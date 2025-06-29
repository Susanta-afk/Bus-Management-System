<?php
$errors = [];
// Validate each field
if(empty($_POST["NAME"]))
{
die("Name is required");
}
if(!filter_var($_POST["EMAIL"],FILTER_VALIDATE_EMAIL))
{
die("Valid email is required");
}
if(empty($_POST["COMMENTS"]))
{
die("must be filled");
}
if(empty($errors)) {
require_once __DIR__ .'php/config.php';
$sql = "INSERT INTO `feedback`(`NAME`, `EMAIL`, `RATING`, `COMMENTS`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')";
$stmt = $mysqli->stmt_init();
if (!$stmt->prepare($sql)) {
die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("ssss",$_POST["NAME"],$_POST["EMAIL"],$_POST["RATING"],$_POST["COMMENTS"],);
if ($stmt->execute()) {
$ticketId = $stmt->insert_id;
header("Location:homepage2.php");
exit;
} else {
die($mysqli->error . " " .$mysqli->errno);
}
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
if(!empty($errors)) {
foreach($errors as $error) {
echo $error . "<br>";
}
}
?>