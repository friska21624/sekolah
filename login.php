=<?php
session_start();
if (isset($_SESSION['email'])) {
    header('Location: dasboard.php');
    exit();
}

$error = '';

$host = 'localhost';
$db = 'loginpris';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM loginn WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        $success = true;
        header("Refresh: 2; url=dasboard.php");
    } else {
        $errors[] = "Email atau Password salah.";
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('gedung71.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .login-container {
            background-color: #fff;
            padding: 55px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            color: #333;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #333;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .forgot-password {
            text-decoration: none;
            color: #28a745;
            font-size: 14px;
            display: block;
            margin-top: 10px;
            text-align: left;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .login-container a {
            text-decoration: none;
            color: #28a745;
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .error-message,
        .success-message {
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .error-message.show,
        .success-message.show {
            opacity: 1;
        }

        .error-message {
            color: red;
        }

        .success-message {
            color: green;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php if ($success) : ?>
            <div class="success-message show">
                <p>Login berhasil! Mengarahkan ke dashboard...</p>
            </div>
        <?php elseif (!empty($errors)) : ?>
            <div class="error-message show">
                <?php foreach ($errors as $error) : ?>
                    <p><?php echo htmlspecialchars($error); ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <a href="forget.php" class="forgot-password">Lupa Password?</a>
        </form>
        <a href="Registrasi.php">Belum punya akun? Daftar di sini.</a>
    </div>
</body>
</html>
