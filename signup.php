<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600&display=swap">
  <style>
    body {
      font-family: 'Exo', sans-serif;
      background-color: #f8f8f8;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      width: 400px;
      background-color: #ffffff;
      border-radius: 20px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
      text-align: center;
    }
    h1 {
      color: #333;
      margin-bottom: 30px;
      font-weight: 600;
      letter-spacing: 1px;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: calc(100% - 20px);
      padding: 12px;
      margin: 10px;
      border: none;
      border-radius: 5px;
      background-color: #f5f5f5;
      font-size: 16px;
      transition: background-color 0.3s ease;
      outline: none;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
      background-color: #e0e0e0;
    }
    button {
      width: calc(100% - 20px);
      padding: 15px;
      background-color: #ff6f61;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
      outline: none;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
    }
    button:hover {
      background-color: #ff5046;
    }
    .links {
      margin-top: 20px;
      font-size: 14px;
    }
    .links a {
      color: #555555;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    .links a:hover {
      color: #ff6f61;
    }
    .decorative-line {
      background: linear-gradient(to right, #ff6f61, #ff5046);
      height: 3px;
      border-radius: 5px;
      margin: 20px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Join Us Now!</h1>
    <div class="decorative-line"></div>
    <form action="process_signup.php" method="POST" novalidate>
      <input autocomplete="off" type="text" placeholder="Your Name" name="username" required>
      <input autocomplete="off" type="email" placeholder="Your Email" name="email" required>
      <input autocomplete="off" type="password" placeholder="Create a Password" id="password" name="password" required>
      <input autocomplete="off" type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password" required>
      <button type="submit">Sign Up</button>
      <div class="links">
        <span>Already have an account? </span><a href="login.php">Login here</a>
      </div>
    </form>
  </div>
</body>
</html>




