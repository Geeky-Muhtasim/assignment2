<?php

$fullName = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$conn = mysqli_connect("localhost", "root", "", "contact form") or die("connection failed");
$sql = "INSERT INTO contact_details(Full_Name, Email, Messages) VALUES ('$fullName', '$email','$message')";
header("location: http://localhost/contact%20form/contact.php");
$result = mysqli_query($conn, $sql) or die("Query failed");

?>