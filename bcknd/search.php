<?php
session_start();
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'teacher') {
    header('Location: login.php');
    exit();
}

if(isset($_POST['submit'])) {
    $search = $_POST['search'];
    $conn = mysqli_connect("localhost", "root", "", "dynamic");

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM students WHERE roll_no LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Search</title>
    <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>

	<?php if(isset($_POST['submit'])): ?>
		<?php if(mysqli_num_rows($result) > 0): ?>
			<table style="border: 1px solid black; height: auto; width: 500px;">
				<thead>
					<tr>
						<th>Name</th>
						<th>Roll No.</th>
						<th>Department</th>
						<th>Email</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = mysqli_fetch_assoc($result)): ?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['roll_no']; ?></td>
							<td><?php echo $row['department']; ?></td>
							<td><?php echo $row['email']; ?></td>
						</tr>
					<?php endwhile; ?>
				</tbody>
			</table>
		<?php else: ?>
			<p>No record found</p>
		<?php endif; ?>
	<?php endif; ?>
</body>
</html>
