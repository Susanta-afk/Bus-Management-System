<?php
$errors = [];
// Validate each field
if(empty($_POST["name"]))
{
die("Name is required");
}
if(!
filter_var($_POST["email"],
FILTER_VALIDATE_EMAIL))
{
die("Valid email is required");
}
if(empty($_POST["phone"]))
{
die("Phone number is
required");
}
if(empty($_POST["source"]))
{
die("Source must be
selected");
}
if(empty($_POST["destinatio
n"]))
{
die("Destination must be
selected");
}
if(empty($_POST["busnos"]))
{
die("must be selected");
}
if(empty($_POST["seatnos"])
)
{
die("seat shall be selected");
}
if(empty($_POST["date"]))
{
$errors[] = "Date is
required.";
}
if(empty($errors)) {
require_once __DIR__ .
'/config.php';
$sql = "INSERT INTO
ticketbook (name, email,
phone, source, destination,
busnos, seatnos, date)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->stmt_init();
if (!$stmt->prepare($sql)) {
die("SQL error: " . $mysqli-
>error);
}
$stmt-
>bind_param("ssssssss",
$_POST["name"],
$_POST["email"],
$_POST["phone"],
$_POST["source"],
$_POST["destination"],
$_POST["busnos"],
$_POST["seatnos"],
$_POST["date"]
);
if ($stmt->execute()) {
$ticketId = $stmt->insert_id;
header("Location:
confo.php?ticketId=" .
$ticketId);
exit;
} else {
die($mysqli->error . " " .
$mysqli->errno);
}
}
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Display validation errors, if
any
if(!empty($errors)) {
foreach($errors as $error) {
echo $error . "<br>";
}
}
?>
