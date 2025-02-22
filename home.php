<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 71 Jakarta</title>
    <style>
        body {
            margin: 0;
            background-image: url('gedung71.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #fff;
        }

        .box {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9); /* Sedikit transparan */
            border: 2px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 600px;
            margin-top: 20px; /* Posisi di atas */
        }

        .box h1 {
            font-size: 32px;
            margin: 0;
            color: #333;
        }

        .marquee p {
            font-size: 18px;
            margin: 10px 0;
            color: #555;
        }

        .login-box {
            margin-top: 20px;
        }

        .login-box button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-box button:hover {
            background-color: #218838;
        }

        .container {
            display: flex;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            margin-top: 30px;
            flex-wrap: wrap; /* Supaya bisa menyesuaikan jika layarnya lebih kecil */
        }

        .card {
            background-color: #d4d8dd;
            border-radius: 10px;
            width: 250px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
            opacity: 0; /* Awalnya tidak terlihat */
            transform: translateY(30px); /* Geser ke bawah */
            animation: fadeInUp 1s ease forwards; /* Animasi muncul */
        }

        /* Animasi fade-in */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0); /* Kembali ke posisi asli */
            }
        }

        /* Animasi dengan delay untuk setiap card */
        .card:nth-child(1) {
            animation-delay: 0.2s;
        }

        .card:nth-child(2) {
            animation-delay: 0.4s;
        }

        .card:nth-child(3) {
            animation-delay: 0.6s;
        }

        .card:nth-child(4) {
            animation-delay: 0.8s;
        }

        .card h2 {
            font-size: 20px;
            color: #1b2746;
        }

        .card p {
            font-size: 14px;
            color: #4a4a4a;
        }

        .card img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <!-- Box "SMKN 71 Jakarta" berada di bagian atas -->
    <div class="box">
        <h1>SMKN 71 Jakarta</h1>
        <div class="marquee">
            <p>Unggul dalam mutu, teladan berperilaku</p>
        </div>
        <div class="login-box">
            <a href="login.php">
            <button>login</button>
        </a>
        </div>
    </div>

    <!-- Kontainer untuk card di bagian bawah -->
    <div class="container">
        <!-- Card 1 -->
        <div class="card">
            <h2>Jelajahi Keunggulan Kejuruan Kami</h2>
            <p>Program Kejuruan Terdepan untuk Masa Depan yang Gemilang</p>
            <p>“Kami bangga menawarkan berbagai program kejuruan yang dirancang untuk membekali siswa dengan keterampilan praktis dan pengetahuan mendalam.”</p>
        </div>

        <!-- Card 2: Rekayasa Perangkat Lunak -->
        <div class="card">
            <img src="rpl.png" alt="RPL">
            <h2>Rekayasa Perangkat Lunak</h2>
            <p>Di RPL siswa belajar membangun solusi digital yang inovatif, menguasai bahasa pemrograman, dan merancang aplikasi yang relevan di era digital.</p>
        </div>

        <!-- Card 3: Animasi -->
        <div class="card">
            <img src="animasi.png" alt="Animasi">
            <h2>Animasi</h2>
            <p>Program Animasi kami mengajarkan seni visual dalam gerakan, mempersiapkan siswa untuk berkarya dalam industri hiburan, periklanan, dan multimedia dengan teknologi terkini.</p>
        </div>

        <!-- Card 4: Desain Komunikasi Visual -->
        <div class="card">
            <img src="dkv.png" alt="DKV">
            <h2>Desain Komunikasi Visual</h2>
            <p>Program DKV membentuk siswa menjadi desainer visual yang mampu menyampaikan pesan melalui media grafis, dengan fokus pada estetika dan efektivitas.</p>
        </div>
    </div>

</body>
</html>
