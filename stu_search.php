<!DOCTYPE html>
<html>
<head>
	<title>Student Search</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
<?php include_once "include/navbar.php" ?>
<div style="position: absolute; top: 10px; right: 10px;">
    <form method="post" action="bcknd/logout.php">
        <input type="submit" value="Logout" name="logout">
    </form> </div>
	<h2>Search for Student by Roll No.</h2>
	<form action="bcknd/search.php" method="post" target="search_result">
		<input type="text" name="search" placeholder="Enter Roll No.">
		<input type="submit" name="submit" value="Search">
	</form>
	<br>
	<iframe name="search_result" style="border:none;width:100%; height:fit-content;"></iframe>
	<form method="get" action="show.php">
        <input type="submit" value="Show" name="show">
    </form>
    <form method="get" action="insert.php">
        <input type="submit" value="Insert" name="insert">
    </form>
</body>
</html>
