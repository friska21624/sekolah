<?php
    // Detail koneksi ke database
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "loginpris";

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    // Mengecek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $error_message = ""; // Variabel untuk menyimpan pesan kesalahan

    // Mengecek apakah form dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $conn->real_escape_string($_POST['username']);
        $email = $conn->real_escape_string($_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Mengecek apakah email sudah terdaftar
        $check_email_sql = "SELECT * FROM loginn WHERE email = ?";
        $stmt = $conn->prepare($check_email_sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error_message = "Email sudah terdaftar. Gunakan email lain.";
        } else {
            // Validasi password dan konfirmasi password
            if ($password === $confirm_password) {
                // Simpan password tanpa hashing (TIDAK AMAN)
                $insert_sql = "INSERT INTO loginn (username, email, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($insert_sql);
                $stmt->bind_param("sss", $username, $email, $password);

                if ($stmt->execute()) {
                    // Redirect ke halaman login setelah registrasi berhasil
                    header("Location: login.php");
                    exit();
                } else {
                    echo "Error: " . $stmt->error;
                }
            } else {
                $error_message = "Password dan konfirmasi password tidak sesuai!";
            }
        }

        // Menutup statement
        $stmt->close();
    }

    // Menutup koneksi
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <!-- Link ke Font Awesome untuk menggunakan ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url(gedung71.jpg) no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .register-container {
            background-color: #fff;
            padding: 55px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            color: #333;
            text-align: center;
        }

        .header {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header img {
            width: 60px;
            height: auto;
            margin-right: 10px;
        }

        .header h1 {
            font-size: 24px;
            color: #333;
            margin: 0;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
            color: #333;
        }

        .input-group {
            margin-bottom: 15px;
            position: relative;
            text-align: left;
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
            padding-right: 35px; /* Memberikan ruang untuk ikon di kanan */
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .input-group .fa-lock, .input-group .fa-lock-open {
            position: absolute;
            right: 10px; /* Pindahkan ikon ke kanan */
            top: 35px;
            font-size: 16px;
            color: #888;
            cursor: pointer; /* Menunjukkan ikon dapat diklik */
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
        }

        button:hover {
            background-color: #0056b3;
        }

        .register-container a {
            text-decoration: none;
            color: #28a745;
            display: block;
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
        }

        .register-container a:hover {
            text-decoration: underline;
        }

        .error-message {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="header">
            <img src="logo71.png" alt="Logo SMKN 71 Jakarta">
            <h1>SMKN 71 Jakarta</h1>
        </div>

        <h2>Register</h2>

        <!-- Tampilkan pesan kesalahan jika ada -->
        <?php if ($error_message): ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <!-- Form registrasi -->
        <form action="Registrasi.php" method="POST">
            <div class="input-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <i class="fas fa-lock" id="togglePassword"></i> <!-- Ikon gembok untuk toggle password -->
            </div>

            <div class="input-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
                <i class="fas fa-lock" id="toggleConfirmPassword"></i> <!-- Ikon gembok untuk toggle confirm password -->
            </div>

            <button type="submit">Register</button>
        </form>
        <a href="login.php">Already have an account? Login here.</a>
    </div>

    <!-- JavaScript untuk toggle show/hide password -->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            // Toggle tipe input antara password dan text
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // Toggle ikon antara gembok terkunci dan gembok terbuka
            this.classList.toggle('fa-lock-open');
        });

        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const confirmPassword = document.querySelector('#confirm_password');

        toggleConfirmPassword.addEventListener('click', function () {
            // Toggle tipe input antara password dan text
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);

            // Toggle ikon antara gembok terkunci dan gembok terbuka
            this.classList.toggle('fa-lock-open');
        });
    </script>
</body>
</html>
