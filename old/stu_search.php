<!DOCTYPE html>
<html>
<head>
	<title>Student Search</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<h2>Search for Student by Roll No.</h2>
	<form action="search.php" method="post" target="search_result">
		<input type="text" name="search" placeholder="Enter Roll No.">
		<input type="submit" name="submit" value="Search">
	</form>
	<br>
	<iframe name="search_result" style="border:none;width:100%;height:500px;"></iframe>
</body>
</html>
