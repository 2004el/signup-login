<?php
$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST")
{
  $mysqli = require __DIR__ . "/database.php";
  $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST["email"]));
  $result = $mysqli->query($sql);
  $user = $result->fetch_assoc();

  if($user)
  {
    if(password_verify($_POST["password"], $user["password_hash"]))
    {
      session_start();
      session_regenerate_id();
      $_SESSION["user_id"] = $user["id"];
      header("Location: index.php");
      exit;
    }
  }
  $is_invalid = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
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

    .error-message {
      color: #ff0000;
      font-size: 14px;
      margin-top: 5px;
      text-align: center;
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
    <h1>Login Page</h1>
    <!-- PHP logic for error message can be added here -->
    <!-- Dynamic error message can be displayed based on form validation -->
    <form method="post">
      <input autocomplete="off" type="email" placeholder="Email" name="email" id="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
      <input autocomplete="off" type="password" placeholder="Password" name="password" id="password">
      <button type="submit">Login</button>
    </form>
    <div class="links">
      <span>Don't have an account? </span><a href="signup.php">Sign up here</a>
    </div>
  </div>
</body>

</html>
