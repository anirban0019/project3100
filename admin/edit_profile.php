<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <header>
    <!-- Header content -->
  </header>
  <div class="container">
    <h2>Edit Profile</h2>
    <form id="edit-profile-form">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $name; ?>">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $email; ?>">
      </div>
      <div class="form-group">
        <label for="bio">Bio:</label>
        <textarea class="form-control" id="bio" name="bio" placeholder="<?php echo $bio; ?>"></textarea>
      </div>
      <div class="form-group">
        <label for="profile-picture">Profile Picture:</label>
        <input type="file" class="form-control" id="profile-picture" name="profile-picture">
      </div>
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="<?php echo $phone; ?>">
      </div>
      <div class="form-group">
        <label for="phone">Address:</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="<?php echo $address; ?>">
      </div>
      <!-- Add more form fields for other profile data -->
      <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
  </div>
  <script src="../js/editprofile.js"></script>
  <!-- Include additional scripts as needed -->
</body>
</html>
