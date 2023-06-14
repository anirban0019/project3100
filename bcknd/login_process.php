<?php
// Start session
session_start();

// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "dynamic");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get input values and escape special characters
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Prepare SQL query for user table
$user_sql = "SELECT * FROM user WHERE username='$username'";

// Execute query for user table
$user_result = mysqli_query($conn, $user_sql);

// Check if query returned a row in user table
if (mysqli_num_rows($user_result) == 1) {
  // Fetch the row from user table
  $user_row = mysqli_fetch_assoc($user_result);

  // Verify the password
  if (password_verify($password, $user_row['password'])) {
    // Successful login
    $_SESSION['username'] = $username; // Set session variable

    // Check if user is a student
    $student_sql = "SELECT * FROM students WHERE username='$username'";
    $student_result = mysqli_query($conn, $student_sql);
    if (mysqli_num_rows($student_result) == 1) {
      //setting the role
      $_SESSION['role']="student";

      // Redirect to show.php for student
      header("Location: ../profile.php");
      exit(); // Exit script
    } else {
      // Redirect to insert.php for teacher
      $_SESSION['role']="teacher";
      header("Location: ../profile.php"); 
      exit(); // Exit script
    }
  } else {
    // Failed login
    echo "Incorret passowrd";
  }
} else {
  // Failed login
 echo "Incorrect username";
}

// Close MySQL connection
mysqli_close($conn);
?>
