<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background: url(gedung71.jpg);
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    width: 100%;
}

h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #333;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>
    <div class="container">
        <?php
        session_start();

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "loginpris";

        // Buat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Cek koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['email'])) {
                // Proses reset email
                $email = $_POST['email'];
                $stmt = $conn->prepare('SELECT id FROM loginn WHERE email=?');
                $stmt->bind_param('s', $email);
                $stmt->execute();
                $stmt->bind_result($id);
                $stmt->fetch();
                $stmt->close();

                if ($id) {
                    $_SESSION['reset_id'] = $id;
                    $_SESSION['reset'] = 2;
                    echo '<h2>Reset Your Password</h2>';
                    echo '<form method="post">
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmpassword">Confirm Password</label>
                                <input type="password" id="confirmpassword" name="confirmpassword" required>
                            </div>
                            <button type="submit">Update Password</button>
                          </form>';
                } else {
                    echo "<script>alert('Email tidak ada');</script>";
                    echo '<h2>Reset Password</h2>';
                    echo '<form method="post">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <button type="submit">Send Reset Link</button>
                          </form>';
                }
            } elseif (isset($_POST['password']) && isset($_POST['confirmpassword'])) {
                // Proses update password
                if (isset($_SESSION['reset_id']) && $_SESSION['reset'] == 2) {
                    $id = $_SESSION['reset_id'];
                    $password = $_POST['password'];
                    $confirmpassword = $_POST['confirmpassword'];

                    if ($password == $confirmpassword) {
                        $stmt = $conn->prepare("UPDATE loginn SET password=? WHERE id=?");
                        $stmt->bind_param('si', $password, $id);
                        if ($stmt->execute()) {
                            $_SESSION['reset'] = 1;
                            session_unset();
                            session_destroy();
                            echo "<script>alert('Password Berhasil Diganti'); window.location.href='login.php';</script>";
                        } else {
                            echo "<script>alert('Password Gagal Diganti');</script>";
                        }
                        $stmt->close();
                    } else {
                        echo "<script>alert('Password Tidak Sesuai');</script>";
                    }
                } else {
                    echo "<script>alert('Sesi Gagal');</script>";
                }
            }
        } else {
            // Tampilkan form reset password berdasarkan sesi
            if (isset($_SESSION['reset']) && $_SESSION['reset'] == 2) {
                echo '<h2>Reset Your Password</h2>';
                echo '<form method="post">
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" id="confirmpassword" name="confirmpassword" required>
                        </div>
                        <button type="submit">Update Password</button>
                      </form>';
            } else {
                echo '<h2>Reset Password</h2>';
                echo '<form method="post">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <button type="submit">Send Reset Link</button>
                      </form>';
            }
        }

        $conn->close();
        ?>
    </div>
</body>
</html>
