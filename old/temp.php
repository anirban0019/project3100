
<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "dynamic");

// Check connection
if (!$conn) {
    echo "failed";
  die("Connection failed: " . mysqli_connect_error());
}

// Get input values and escape special characters
$username = mysqli_real_escape_string($conn, $_POST['username']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare SQL query
$sql = "INSERT INTO user (username, name, email, password) VALUES ('$username', '$name', '$email', '$hashed_password')";

// Execute query
if (mysqli_query($conn, $sql)) {
  echo "Sign up successful!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close MySQL connection
mysqli_close($conn);
?> 
