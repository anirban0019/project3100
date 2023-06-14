<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "", "dynamic");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get input values and escape special characters
$username = mysqli_real_escape_string($conn, $_POST['username']);
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$role = mysqli_real_escape_string($conn, $_POST['status']);

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$check_username_query = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($conn, $check_username_query);

if (mysqli_num_rows($result) > 0) {
    // If username already exists, give a warning and redirect to signup page
    echo '<script>alert("Username already exists! Please choose a different username.");';
    echo 'window.location.href = "../login.php";</script>';
} else {
    // If username doesn't exist, prepare SQL query and execute it based on role
    if ($role == 'student') {
        $roll_no = mysqli_real_escape_string($conn, $_POST['roll_no']);
        $department = mysqli_real_escape_string($conn, $_POST['department']);
        $sql = "INSERT INTO students (username, name, email, password, roll_no, department) VALUES ('$username', '$name', '$email', '$hashed_password', '$roll_no', '$department')";
        $sql2 = "INSERT INTO user (username, name, email, password) VALUES ('$username', '$name', '$email', '$hashed_password')";
    } else {
        $sql2 = "INSERT INTO user (username, name, email, password) VALUES ('$username', '$name', '$email', '$hashed_password')";
        $sql = "INSERT INTO teachers (username, name, email, password) VALUES ('$username', '$name', '$email', '$hashed_password')";
    }

    if (mysqli_query($conn, $sql)&&mysqli_query($conn, $sql2)) {
        // If query is successful, give a success message
        echo '<script>alert("Sign up successful!");';
        echo 'window.location.href = "../login.php";</script>';
    } else {
        // If query fails, give an error message
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close MySQL connection
mysqli_close($conn);
?>
