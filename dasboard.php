<?php
session_start();

// Cek apakah pengguna sudah login berdasarkan email
if (!isset($_SESSION['email'])) {
    // Jika belum login, redirect ke halaman login
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kiri dengan Tombol Toggle</title>
    <style>
        body {
            margin: 0;
            background-image: url('welcome.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            color: #fff;
        }

        .sidebar {
            width: 250px;
            height: 100vh;
            background: rgba(0, 0, 0, 0.8);
            padding-top: 20px;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .sidebar.hidden {
            transform: translateX(-250px);
        }

        .toggle-button {
            position: fixed;
            top: 20px;
            left: 250px;
            background-color: transparent;
            color: black;
            border: none;
            padding: 10px;
            font-size: 24px;
            cursor: pointer;
            z-index: 1001;
            transition: left 0.3s ease, top 0.3s ease;
        }

        .toggle-button.moved {
            top: 20px;
            left: 20px;
        }

        .menu {
            list-style: none;
            padding: 0;
            width: 100%;
        }

        .menu li {
            width: 100%;
            padding: 15px;
            text-align: left;
            cursor: pointer;
            transition: background 0.3s;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .menu li:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            display: block;
            width: 100%;
            height: 100%;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
            transition: margin-left 0.3s ease;
            text-align: center;
        }

       
        

        .content.full {
            margin-left: 0;
        }

        .box-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            max-width: 800px;
            margin: 0 auto;
        }

        .box {
            width: 100%;
            height: 150px;
            background-color: rgb(0, 0, 0, .5);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
            margin-bottom: 100px;
        }

        .box a {
            text-decoration: none;
        }

        .box button {
            background-color: #0056b3;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .box button:hover {
            background-color: #003d80;
        }

        h1 {
            text-align: center;
            color: #007BFF;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <button class="toggle-button" id="toggleButton" onclick="toggleSidebar()">&#61;</button>

    <div class="sidebar" id="sidebar">
        <h2>Dasboard</h2>
        <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="profile.php">Profil</a></li>
            <li><a href="mapel.php">Mata Pelajaran</a></li>
            <li><a href="belajar2.php">Form Nilai</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="content" id="content">
        <div class="box-container">
            <div class="box">
                <p>PROFILE GURU</p>
                <a href="profile.php"><button>View</button></a>
            </div>
            <div class="box">
                <p>DATA MATA PELAJARAN</p>
                <a href="mapel_kelas_x.php"><button>View</button></a>
            </div>
            <div class="box">
                <p>FORM NILAI</p>
                <a href="belajar2.php"><button>View</button></a>
            </div>
            <div class="box">
                <p>CONTACT</p>
                <a href="contact.php"><button>View</button></a>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var content = document.getElementById("content");
            var toggleButton = document.getElementById("toggleButton");

            sidebar.classList.toggle("hidden");
            content.classList.toggle("full");
            toggleButton.classList.toggle("moved");
        }
    </script>
<script>
        let idleTime = 0;

        function resetIdleTime(){
            idleTime = 0;
        }

        setInterval(function() {
            idleTime++;
            if (idleTime >= 10) {
                window.location.href = 'logout.php';
            }
        },1000);

       // Riset idle time on activity
        window.onload = function(){
            document.body.addEventi.istener('mousemouve',resetIdleTime);
            document.body.addEventi.istener('keypress',resetIdleTime);
        };
        
    </script>
</body>
</html>
