<?php
// Get the form data
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password_hash'];
$password_confirm = $_POST['passwordConfirmation'];

// Check if passwords match
if ($password !== $password_confirm) {
    echo "Passwords do not match!";
    exit();
}

// Hash the password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Connect to the database
$conn = new mysqli("localhost", "root", "", "jobseeker");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the email already exists
$stmt = $conn->prepare("SELECT email FROM register2 WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
if ($stmt->num_rows > 0) {
    // Email already exists, so registration fails
    echo "Email already exists!";
} else {
    // Email does not exist and passwords match, so insert the new record
    $stmt = $conn->prepare("INSERT INTO register2 (name, number, email, password_hash) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $number, $email, $password_hash);
    $stmt->execute();
    echo "Registration successful!";
}

// Close connections
$stmt->close();
$conn->close();
header("Location: http://localhost:3000/index.html");
