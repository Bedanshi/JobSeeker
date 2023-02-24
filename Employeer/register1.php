<?php

$personname = $_POST['personname'];
$organization = $_POST['organization'];
$formselect = $_POST['formselect'];
$email = $_POST['email'];
$phnnumber = $_POST['phnnumber'];
$password = $_POST['password_hash'];
$password_confirm = $_POST['passwordConfirmation'];



// Check if passwords match
if ($password !== $password_confirm) {
    echo "Passwords do not match!";
    exit();
}


// Hash the password
$password_hash = password_hash($password, PASSWORD_DEFAULT);



// Database connection
$conn = new mysqli('localhost', 'root', '', 'jobseeker');


//check connection
if ($conn->connect_error) {
    echo "$conn->connect_error";
    die("Connection Failed : " . $conn->connect_error);
}


// Check if the email already exists
$stmt = $conn->prepare("SELECT email FROM register1 WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    // Email already exists, so registration fails
    echo "Email already exists!";
} else {
    $stmt = $conn->prepare("INSERT INTO register1(personname,organization,formselect,email,phnnumber,password_hash)VALUES(?, ?, ?, ?, ?,?)");
    $stmt->bind_param("ssssss", $personname, $organization, $formselect, $email, $phnnumber, $password_hash);
    $stmt->execute();
    echo "sucessfull";

    $stmt->close();
    $conn->close();
}
header("Location: http://localhost:3000/index.html");
