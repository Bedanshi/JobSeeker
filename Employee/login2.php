<?
$email = $_POST['email'];
$password_hash = $_POST['password_hash'];


// Database connection
$conn = new mysqli("localhost", "root", "", "jobseeker");

if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {



    $stmt = $conn->prepare("SELECT * FROM register2 (email,  password_hash ) VALUES(?,?)");
    $stmt->bind_param("ss", $email, $password_hash);
    $stmt->execute();
    echo "Registration successful!";
}

// Close connections
$stmt->close();
$conn->close();
header("Location: http://localhost:3000/index.html");
