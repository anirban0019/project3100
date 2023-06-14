<!DOCTYPE html>
<html>
<head><title>Insert a record</title>
<link rel="stylesheet" href="css/bootstrap.min.css" />

</head>
<body>
    <?php include_once "include/navbar.php" ?>
    <!--logout button-->
<div style="position: absolute; top: 10px; right: 10px;">
<form method="post" action="bcknd/logout.php">
        <input type="submit" value="Logout" name="logout">
    </form>
</div>

    <form method="post">
        Student name: <input type="text" name="name" required><br>
        Student class: <input type="text" name="class" required><br>
        Student fees: <input type="text" name="fees" required><br>
        Fee status <select name="fee_status"><option value="paid">Paid</option>
        <option value="unpaid">Unpaid</option></select>
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $class=$_POST['class'];
            $fees=$_POST['fees'];
            $status=$_POST['fee_status'];

            $conn= mysqli_connect("localhost","root","","test");

            $sql = "INSERT INTO `fees` (`student_name`, `class`, `fees`, `status`) VALUES ('$name','$class','$fees','$status');";

            if(mysqli_query($conn,$sql)){
               echo "<h1>Your data has been recorded</h1>";
            }

        }
    ?>
    <form method="get" action="show.php">
        <input type="submit" value="Show" name="show">
    </form>
    <form method="get" action="stu_search.php">
        <input type="submit" value="Search" name="search">
    </form>
</body>
</html>
