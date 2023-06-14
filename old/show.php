<!DOCTYPE html>
<html>
<head><title>Insert a record</title></head>
<body>
<div style="position: absolute; top: 10px; right: 10px;">
    <form method="post" action="logout.php">
        <input type="submit" value="Logout" name="logout">
    </form>
</div>
    <?php
        

            $conn= mysqli_connect("localhost","root","","test");

            $sql = "SELECT * FROM `fees`;";
            $result= mysqli_query($conn,$sql);
            ?>
                <table border="1", width="500px", cellspacing="0">
                 <tr><th> Student id</th>
                    <th> Student name</th>
                <th>Class</th>
                <th>Fees</th>
                <th>Status</th>
                </tr>
            <?php
            while($row=mysqli_fetch_assoc($result)){
               echo "<tr>";
               echo "<td>".$row['id']."</td>";
               echo "<td>".$row['student_name']."</td>";
               echo "<td>".$row['class']."</td>";
               echo "<td>".$row['fees']."</td>";
               echo "<td>".$row['status']."</td>";
                echo "</tr>"; 
               
            }
?>
 </table>
</body>
</html>
