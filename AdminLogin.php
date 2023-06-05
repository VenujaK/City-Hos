<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/UserLogin.css">
  </head>
  <body>
    <div class="wrapper">
      <div class="title">Admin Login </div>
      <form action="#" method="post" onsubmit="return login()">
        <div class="field">
          <input type="text" name="email" required placeholder="Email Address">
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="password" name="password" placeholder="Password" required>
          <label>Password</label>
        </div>
        <div class="field">
          <input type="submit" name="submit" value="Login">
        </div>
        <div class="signup-link"><a href="./DocRegister.php"></a></div>
      </form>
    </div>
    <script>
      function login() {
        // Get the username and password fields
        const username = document.getElementsByName('email')[0].value;
        const password = document.getElementsByName('password')[0].value;
        
        // Check if the credentials are correct
        if (username === 'admin' && password === '1234') {
          // Redirect to the admin page
          window.location.href = './AdminInterface.php';
          return false;
        } else {
          // Show an error message
          alert('Invalid username or password');
          return false;
        }
      }
    </script>
  </body>
</html>
