<?php
include 'db.php';
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();
        } else {
            $message = "Invalid password.";
        }
    } else {
        $message = "User not found.";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kollywood Hits  Login</title>
</head>
<body style="margin: 0; padding: 0; height: 100vh; display: flex; justify-content: center; align-items: center; font-family: Arial, sans-serif;background: url('./assets/Image/01.gif') no-repeat center center fixed; background-size: cover;">
    <form method="post" style="background: linear-gradient(90deg, blue 30%,  red 70%); padding: 40px; border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); width: 100%; max-width: 400px; text-align: center;background: url('./assets/Image/01.gif') no-repeat center center/cover;">
    <h1 style = color:white> Welcome to Kollywood Hits</h1>

    <h2 style="color: #ffffff; font-size: 28px; margin-bottom: 55px; text-transform: uppercase; letter-spacing: 2px;">Login</h2>
        <input type="text" name="username" placeholder="Username" required style="width: 100%; padding: 12px; margin: 10px 0; border: none; border-radius: 5px; background: hsla(0, 0.00%, 100.00%, 0.90); color: #333; font-size: 16px; outline: none; box-sizing: border-box;">
        <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 12px; margin: 10px 0; border: none; border-radius: 5px; background: rgba(255, 255, 255, 0.9); color: #333; font-size: 16px; outline: none; box-sizing: border-box;">
        <input type="submit" value="Login" style="width: 100%; padding: 12px; margin: 15px 0; border: none; border-radius: 5px; background:rgb(110, 43, 255); color:rgb(255, 255, 255); font-size: 18px; font-weight: bold; cursor: pointer; transition: background 0.3s ease;">
        <p style="color: #ffffff; font-size: 14px; margin: 10px 0;"><?php echo $message; ?></p>
        <p style="color: #ffffff; font-size: 14px; margin-top: 20px;">Don't have an account? <a href="signup.php" style="color:rgb(57, 43, 255); text-decoration: none; font-weight: bold;">Sign up here</a></p>
    </form>
</body>
</html>