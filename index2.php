<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbanme = "bookings";
$conn = new mysqli($servername,$username,$password,$dbanme);

if($conn->connect_error){
    die("Connection Failed:" .$conn->connect_error);

}
//Handle form submission
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $source = $_POST["source"];
    $destination = $_POST["destination"];
    $selectbus = $_POST["selectbus"];
    $date = $_POST["date"];

    //prepare and execute the database insertion
    $sql = "INSERT INTO `booking`(`name`, `email`, `phone`, `source`, `destination`, `selectbus`, `date`)
     VALUES ('$name','$email','$phone','$source','$destination','$selectbus','$date')";

     $check= mail($email,"Ticket Confirmation","Your Tickets Has Been Booked Bus Type Booked $selectbus on $date","FROM:jrravan4@gmail.com");
     

      if($conn->query($sql) == TRUE){
        echo "Booking Successfully";
        
     }else{
        echo "Error: " .$sql . "<br>" .$conn->error; 
     }
}
$conn->close();
?>