window.addEventListener('DOMContentLoaded', (event) => {
  // Fetch user profile data from the backend
  fetch('bcknd/profile.php')
    .then((response) => response.json())
    .then((data) => {
      // Populate the HTML elements with the user profile data
      const profileNameElements = document.getElementsByClassName('profile-name');
      for (let i = 0; i < profileNameElements.length; i++) {
        profileNameElements[i].textContent = data.name;
      }

      const profileEmailElements = document.getElementsByClassName('profile-email');
      for (let i = 0; i < profileEmailElements.length; i++) {
        profileEmailElements[i].textContent = data.email;
      }

      const profileUsernameElements = document.getElementsByClassName('profile-username');
      for (let i = 0; i < profileUsernameElements.length; i++) {
        profileUsernameElements[i].textContent = data.username;
      }

      const profileRoleElements = document.getElementsByClassName('profile-role');
      for (let i = 0; i < profileRoleElements.length; i++) {
        profileRoleElements[i].textContent = data.role;
      }

      document.getElementById('profile-picture').src = data.profile_picture;
      document.getElementById('bio').textContent = data.bio;
     // document.getElementById('field-of-research').textContent = data.field_of_research;
    })
    .catch((error) => {
      console.error('Error:', error);
    });

 // const editProfileBtn = document.getElementById('edit-profile-btn');

 
});
