window.addEventListener('DOMContentLoaded', (event) => {
    // Fetch user profile data from the backend
    fetch('../bcknd/b_edit_profile.php')
      .then((response) => response.json())
      .then((data) => {
        // Populate the HTML elements with the user profile data
        document.getElementById('name').value = data.name;
        document.getElementById('email').value = data.email;
        document.getElementById('bio').value = data.bio;
        document.getElementById('profile-picture').src = data.profile_picture;
        document.getElementById('phone').value = data.phone;
        document.getElementById('address').value = data.address;
      })
      .catch((error) => {
        console.error('Error:', error);
      });
  });
  