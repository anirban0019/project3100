<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to CSE RUET!</title>
    <link rel="stylesheet" href="css/stylehome.css" />

  </head>
  <body>
    <header>
      <h2 class="logo">Department of Computer Science and Engineering</h2>
      <nav class="navigation">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Notice</a>
        <a href="#">Contact Us</a>
        <button class="btnlogin">Login</button>
      </nav>
    </header>
   
	
    <div class="wrapper">
    
      <div class="form-boxlogin">
        <h2>Login</h2>
        <form action="bcknd/login_process.php" method="post">
          <div class="input-box">
            <span class="icon"><ion-icon name="mail-open"></ion-icon> </span>
            <input type="text" name="username" required />
            <label>Username</label>
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input type="password" name="password" required />
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox" /> Remember Me </label>
            <a href="#">Forgot Password</a>
          </div>
          <button type="submit" class="btn">Login</button>
          <div class="login-register">
            <p>
              Don't have an account? <a href="#" class="signin-link">Sign In</a>
            </p>
          </div>
        </form>
      </div>
      <div class="form-boxsignin">
        <h2>Sign in</h2>
        <form action="bcknd/signup_process.php" method="post">
          <div class="input-box">
            <span class="icon">
              <ion-icon name="person"></ion-icon>
            </span>
            <input type="text" placeholder="Username" name="username" required />
           
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="person"></ion-icon>
            </span>
            <input type="text" placeholder="Name" name="Name" required />
            
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="mail-open"></ion-icon>
            </span>
            <input type="email" placeholder="Email" name="email" required />
            
          </div>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input type="password" placeholder="Password" name="password" required />
            
          </div>
          <div class="form-group">
            <select id="status" name="status" required>
              <option value="">Select your role</option>
              <option value="student">Student</option>
              <option value="teacher">Teacher</option>
            </select>
          </div>
          <div class="form-group" id="dept_field" style="display: none">
           
            <input type="text" placeholder="Department" id="department" name="department" />
          </div>
          <div class="form-group" id="roll_no_field" style="display: none">
            <input type="text" placeholder="Roll" id="roll_no" name="roll_no" />
          </div>
          <div class="remember-forgot">
            <label
              ><input type="checkbox" /> I agree to the terms &
              conditions</label
            >
          </div>
          <button type="submit" class="btn">Sign In</button>
          <div class="login-register">
            <p>
              Already have an account? <a href="#" class="login-link">Log in</a>
            </p>
          </div>
        </form>
      </div>
    </div>
   <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/scroll.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
