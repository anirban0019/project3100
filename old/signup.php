<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up Page</title>
    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container mt-5">
      <h2 class="text-center mb-3">Sign Up</h2>
      <form method="POST" action="signup_process.php">
        <div class="form-group">
          <label for="username">Username:</label>
          <input
            type="text"
            class="form-control"
            id="username"
            name="username"
            required
          />
        </div>
        <div class="form-group">
          <label for="name">Name:</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            required
          />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input
            type="email"
            class="form-control"
            id="email"
            name="email"
            required
          />
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            required
          />
        </div>
        <div class="form-group">
          <label for="status">Are you a student or a teacher?</label>
          <select class="form-control" id="status" name="status" required>
            <option value="">--Please select--</option>
            <option value="student">Student</option>
            <option value="teacher">Teacher</option>
          </select>
        </div>
        <div class="form-group" id="dept_field" style="display: none">
          <label for="department">Department:</label>
          <input
            type="text"
            class="form-control"
            id="department"
            name="department"
          />
        </div>
        <div class="form-group" id="roll_no_field" style="display: none">
          <label for="roll_no">Roll No:</label>
          <input type="text" class="form-control" id="roll_no" name="roll_no" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div class="mt-3">
        <p>Already have an account? <a href="index.php">Login</a></p>
      </div>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function () {
        $("#status").change(function () {
          if ($(this).val() === "student") {
            $("#dept_field").show();
            $("#roll_no_field").show();
          } else {
            $("#dept_field").hide();
            $("#roll_no_field").hide();
          }
        });
      });
    </script>
  </body>
</html>
