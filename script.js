document.addEventListener('DOMContentLoaded', function () {
  const loginForm = document.getElementById('login-form');

  loginForm.addEventListener('submit', function (e) {
      e.preventDefault();
      
      // Simulate authentication (replace with actual authentication code)
      const username = loginForm.username.value;
      const password = loginForm.password.value;
      
      if (username === 'admin' && password === 'password') {
          alert('Login successful! Redirecting to dashboard...');
          // Redirect to the dashboard or home page
          window.location.href = 'dashboard.html';
      } else {
          alert('Login failed. Please check your username and password.');
      }
  });
});
