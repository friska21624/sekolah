<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - SMK Negeri 71 Jakarta</title>
    <style>
        body {
            background-color: paleturquoise;
            margin: 0;
            padding: 0;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: mediumturquoise;
            padding: 1rem 5%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
        }

        header .logo {
            font-size: 2rem;
            color: black;
            font-weight: bold;
            text-decoration: none; 
            pointer-events: none;  
        }

        header nav {
            display: flex;
            align-items: center;
        }

        header nav a {
            font-size: 1.2rem;
            padding: 0 1rem;
            color: black;
            text-decoration: none;
            transition: color 0.3s;
        }

        header nav a:hover {
            color: #fff;
        }

        .container {
            max-width: 800px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            font-size: 18px;
            line-height: 1.6;
            margin: 20px 0;
        }

        .contact-info a {
            color: #007bff;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        .map-container {
            text-align: center;
            margin: 20px 0;
        }

        .map-container iframe {
            border: 0;
            width: 100%;
            height: 400px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <span class="logo">CONTACT</span>
        <nav>
            <a href="dasboard.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="Mapel.php">Mata Pelajaran</a>
            <a href="belajarr2.php">Form Nilai</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Log Out</a>
        </nav>
    </header>

    <div class="container">
        <div class="contact-info">
            <p><strong>SMK Negeri 71 Jakarta</strong></p>
            <p>Telepon: <a href="tel:08568555672">0856-8555-672</a></p>
            <p>Alamat: Jl. Dr. KRT Radjiman Widyodiningrat Jl. Kp. Pulo Jahe, Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13930</p>
            <p>Jam: Buka pukul 06.00 ⋅ Tutup pukul 15.00, kecuali hari Sabtu dan Minggu tutup</p>
            <p>Temukan kami di peta:</p>
        </div>
        <div class="map-container">
            <iframe src="https://maps.google.com/maps?q=SMK%20NEGERI%2071%20Jakarta&output=embed" allowfullscreen></iframe>
        </div>
    </div>
</body>
</html>
