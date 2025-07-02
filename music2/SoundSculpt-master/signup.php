<?php
include 'db.php';
session_start();
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if user already exists
    $check = $conn->prepare("SELECT id FROM users WHERE username=? OR email=?");
    $check->bind_param("ss", $username, $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $message = "Username or Email already exists!";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
        if ($stmt->execute()) {
            header("Location: login.php?signup=success");
            exit();
        } else {
            $message = "Signup failed. Try again.";
        }
        $stmt->close();
    }
    $check->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicVibe Signup</title>
</head>
<body style="margin: 0; padding: 0; height: 100vh; display: flex; justify-content: center; align-items: center; font-family: Arial, sans-serif; background: url('./assets/Image/10.gif') no-repeat center center fixed; background-size: cover;">
    <form method="post" style="background: url('./assets/Image/10.gif') no-repeat center center/cover; padding: 40px; border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); width: 100%; max-width: 400px; text-align: center;">
        <h2 style="color: #ffffff; font-size: 28px; margin-bottom: 55px; text-transform: uppercase; letter-spacing: 2px;">Signup</h2>
        <input type="text" name="username" placeholder="Username" required style="width: 100%; padding: 12px; margin: 10px 0; border: none; border-radius: 5px; background: hsla(0, 0.00%, 100.00%, 0.90); color: #333; font-size: 16px; outline: none; box-sizing: border-box;">
        <input type="email" name="email" placeholder="Email" required style="width: 100%; padding: 12px; margin: 10px 0; border: none; border-radius: 5px; background: hsla(0, 0.00%, 100.00%, 0.90); color: #333; font-size: 16px; outline: none; box-sizing: border-box;">
        <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 12px; margin: 10px 0; border: none; border-radius: 5px; background: hsla(0, 0.00%, 100.00%, 0.90); color: #333; font-size: 16px; outline: none; box-sizing: border-box;">
        <input type="submit" value="Sign Up" style="width: 100%; padding: 12px; margin: 15px 0; border: none; border-radius: 5px; background: rgb(110, 43, 255); color: #ffffff; font-size: 18px; font-weight: bold; cursor: pointer; transition: background 0.3s ease;">
        <p style="color: #ffffff; font-size: 14px; margin: 10px 0;"><?php echo $message; ?></p>
        <p style="color: #ffffff; font-size: 14px; margin-top: 20px;">Already have an account? <a href="login.php" style="color:rgb(255, 43, 43); text-decoration: none; font-weight: bold;">Login here</a></p>
    </form>
</body>
</html>
