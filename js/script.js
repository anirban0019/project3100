const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const signinLink = document.querySelector('.signin-link');
const btnPopup = document.querySelector('.btnlogin');
const formBoxLogin = document.querySelector('.form-boxlogin');
const formBoxSignin = document.querySelector('.form-boxsignin');

signinLink.addEventListener('click', () => {
  formBoxLogin.style.transform = 'translateX(-400px)';
  formBoxSignin.style.transform = 'translateX(0)';
});

loginLink.addEventListener('click', () => {
  formBoxLogin.style.transform = 'translateX(0)';
  formBoxSignin.style.transform = 'translateX(400px)';
});

btnPopup.addEventListener('click', () => {
  wrapper.classList.toggle('active-popup');
});

// Get the select element and the corresponding fields
const statusSelect = document.getElementById('status');
const deptField = document.getElementById('dept_field');
const rollNoField = document.getElementById('roll_no_field');

// Add event listener to the status select element
statusSelect.addEventListener('change', function() {
  const selectedValue = this.value;

  // Show or hide the fields based on the selected value
  if (selectedValue === 'student') {
    deptField.style.display = 'block';
    rollNoField.style.display = 'block';
  } else if (selectedValue === 'teacher') {
    deptField.style.display = 'block';
    rollNoField.style.display = 'none';
  } else {
    deptField.style.display = 'none';
    rollNoField.style.display = 'none';
  }
});
