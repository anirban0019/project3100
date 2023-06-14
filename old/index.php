<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
			if(isset($_GET['message'])){
				$msg = $_GET['message'];
				echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
				'.$msg.'
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>';
			}
		?>
  <div class="welcome" style= "text-align: center;
  font-family: "Times New Roman", Times, serif;
  align-self: center;">
    <h1>Welcome to RUET</h1>
  </div>
  <div class="container mt-5">
    <div class="login-box">
      <h2 class="text-center mb-3">Login</h2>
      <form method="POST" action="login_process.php">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div class="mt-3">
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
      </div>
    </div>
  </div>
</body>
</html>
