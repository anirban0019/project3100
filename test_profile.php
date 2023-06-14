<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
  </head>
  
  <body>
  <header>
      <!-- Header content -->
    <?php include_once "include/navbar.php" ?>
      <!--logout button-->
    <div style="position: absolute; top: 10px; right: 10px;">
    <form method="post" action="bcknd/logout.php">
        <input type="submit" value="Logout" name="logout">
    </form>
</div>
    </header>
    <div class="container">
  <h2 class="profile-name"></h2>
  <p class="profile-email"></p>
  <p class="profile-username"></p>
  <p class="profile-role"></p>
  <img id="profile-picture" alt="Profile Picture" />
  <p id="bio"></p>
  <p id="field-of-research"></p>
</div>

    <script src="js/profile.js"></script>
    <!-- Include additional scripts as needed -->
  </body>
</html>
