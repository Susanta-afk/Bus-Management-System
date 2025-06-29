<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "feedback";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $rating = $_POST["rating"];
    $comments = $_POST["comments"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `feedback`(`name`, `email`, `rating`, `comments`) VALUES ('$name','$email','$rating','$comments')";

     if($conn->query($sql) == TRUE){
        echo "THANKS FOR PROVIDING A FEEDBACK";
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>