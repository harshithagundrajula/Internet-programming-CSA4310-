document.getElementById('registerForm').addEventListener('submit', function(e) {
  let pwd = document.getElementById('password').value;
  let cpwd = document.getElementById('confirm_password').value;
  if (pwd.length < 6) {
    alert('Password must be at least 6 characters.');
    e.preventDefault();
  } else if (pwd !== cpwd) {
    alert('Passwords do not match.');
    e.preventDefault();
  }
});
