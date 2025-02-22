<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Guru - SMK Negeri 71 Jakarta</title>
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

        .line-with-text {
            width: 100%;
            text-align: center;
            border-bottom: 1px solid #000;
            line-height: 0.1em;
            margin: 100px 0 20px ;
        }

        .line-with-text span {
            background: #cee0f4;
            padding: 0 10px;
            font-size: 25px;
        }

        .profile-card {
            width: 300px;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            color: black;
            font-family: Arial, sans-serif;
            margin: 20px auto;
        }

        .profile-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid white;
        }

        .profile-card h3 {
            margin: 10px 0 0;
            font-size: 22px;
        }

        .profile-card p {
            font-size: 14px;
            opacity: 0.9;
        }

        .profile-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin: 0 auto;
        }

        .profile-card {
            flex: 1 1 calc(20% - 35px);
            max-width: 250px;
        }
    </style>
</head>
<body>
    <header>
        <span class="logo">PROFILE</span>
        <nav>
            <a href="dasboard.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="Mapel.php">Mata Pelajaran</a>
            <a href="belajarr2.php">Form Nilai</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Log Out</a>
        </nav>
    </header>

    <div class="line-with-text">
        <span>Kepala Sekolah</span>
    </div>
    <div class="profile-card">
        <img src="paklambas.png" alt="Foto Kepala Sekolah">
        <h3>Drs. Lambas Pakhpahan, M.M</h3>
        <p>Kepala Sekolah SMKN 71 Jakarta</p>
    </div>

    <div class="line-with-text">
        <span>Wakil Kepala Sekolah</span>
    </div>
    <div class="profile-row">
        <div class="profile-card">
            <img src="busuwarni.jpeg" alt="Foto Wakil Kepala Sekolah">
            <h3>Dra. Suwarni</h3>
            <p>Wakil Kepala Sekolah Bidang Kesiswaan</p>
        </div>
        <div class="profile-card">
            <img src="missjen.jpeg" alt="Foto Wakil Kepala Sekolah">
            <h3>Jenny Vera Nursjam, M.Pd</h3>
            <p>Wakil Kepala Sekolah Bidang Kurikulum</p>
        </div>
        <div class="profile-card">
            <img src="buchomi.png" alt="Foto Wakil Kepala Sekolah">
            <h3>Chomisari Handayani, S.Pd</h3>
            <p>Wakil Kepala Sekolah Bidang Sarana dan Prasarana</p>
        </div>
        <div class="profile-card">
            <img src="bumi.jpeg" alt="Foto Wakil Kepala Sekolah">
            <h3>Umi Haniah, S.Pd</h3>
            <p>Wakil Kepala Sekolah Bidang Humas</p>
        </div>
    </div>

    <div class="line-with-text">
        <span>Guru Kompetensi Keahlian</span>
    </div>
    <div class="profile-row">
        <div class="profile-card">
            <img src="bunanda.jpeg" alt="Foto Guru Kompetensi Keahlian">
            <h3>Nanda Arsyia Murti, S.Kom</h3>
            <p>Guru Kompetensi Keahlian Rekayasa Perangkat Lunak (RPL)</p>
        </div>
        <div class="profile-card">
            <img src="paknurhadi.jpeg" alt="Foto Guru Kompetensi Keahlian">
            <h3>Nurhadi Yahya, S.Ds</h3>
            <p>Guru Kompetensi Keahlian Desain Komunikasi Visual (DKV)</p>
        </div>
        <div class="profile-card">
            <img src="buanisa.jpeg" alt="Foto Guru Kompetensi Keahlian">
            <h3>Anisha Oktaviana, S.Pd</h3>
            <p>Guru Kompetensi Keahlian Animasi</p>
        </div>
    </div>

    <div class="line-with-text">
        <span>Guru Mata Pelajaran</span>
    </div>
    <div class="profile-row">
        <div class="profile-card">
            <img src="busuwarni.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Dra. Suwarni</h3>
            <p>Guru Mata Pelajaran PPKN</p>
        </div>
        <div class="profile-card">
            <img src="missjen.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Jenny Vera Nursjam, M.Pd</h3>
            <p>Guru Mata Pelajaran Bahasa Inggris</p>
        </div>
        <div class="profile-card">
            <img src="bumaxi.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Dra. Maxi Noviyanti</h3>
            <p>Guru Mata Pelajaran Matematika</p>
        </div>
        <div class="profile-card">
            <img src="buchomi.png" alt="Foto Guru Mata Pelajaran">
            <h3>Chomisari Handayani, S.Pd</h3>
            <p>Guru Mata Pelajaran IPAS</p>
        </div>
        <div class="profile-card">
            <img src="bumi.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Umi Haniah.S. Pd</h3>
            <p>Guru Mata Pelajaran Bahasa Indonesia</p>
        </div>
        <div class="profile-card">
            <img src="pakusman.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Muhammad Usman, S.S.I</h3>
            <p>Guru Mata Pelajaran Pendidikan Agama Islam</p>
        </div>
        <div class="profile-card">
            <img src="budwi.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Dwi Yuniastuti, S.Pd</h3>
            <p>Guru Mata Pelajaran Sejarah</p>
        </div>
        <div class="profile-card">
            <img src="pakadi.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Dwiadi Eliyanto, S.Pd</h3>
            <p>Guru Mata Pelajaran Bahasa Inggris</p>
        </div>
        <div class="profile-card">
            <img src="bunurina.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Nurina Kartika Ayu, S.Pd</h3>
            <p>Guru Mata Pelajaran PJOK</p>
        </div>
        <div class="profile-card">
            <img src="paksam.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Samuel Wicaksana, M.Pd</h3>
            <p>Guru Mata Pelajaran Pendidikan Agama Kristen</p>
        </div>
        <div class="profile-card">
            <img src="bufany.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Fanny Indriyani, S.Pd</h3>
            <p>Guru Mata Pelajaran BK</p>
        </div>
        <div class="profile-card">
            <img src="pakipin.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Khairul Arifin, S.Pd</h3>
            <p>Guru Mata Pelajaran Seni Budaya/Mulok/DPK(DKV)</p>
        </div>
        <div class="profile-card">
            <img src="budalilah.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Dalilah, S.Pd</h3>
            <p>Guru Mata Pelajaran Bahasa Inggris</p>
        </div>
        <div class="profile-card">
            <img src="bumaidya.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Maidya Nengsih, S.Pd</h3>
            <p>Guru Mata Pelajaran Matematika</p>
        </div>
        <div class="profile-card">
            <img src="bunanda.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Nanda Arsyia Murti, S.Kom</h3>
            <p>Guru Mata Pelajaran Informatika/MKK(RPL)</p>
        </div>
        <div class="profile-card">
            <img src="paksigit.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Sigit Prasetyo, S.Pd</h3>
            <p>Guru Mata Pelajaran Bahasa Indonesia</p>
        </div>
        <div class="profile-card">
            <img src="paknur.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Nur Muhammad Sapi'ie, S.Pd</h3>
            <p>Guru Mata Pelajaran Matematika</p>
        </div>
        <div class="profile-card">
            <img src="bumiftah.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Miftahul Zannah, S.Pd</h3>
            <p>Guru Mata Pelajaran DPK/MKK(Animasi)</p>
        </div>
        <div class="profile-card">
            <img src="bufarah.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Faradillah Aryani, S.T</h3>
            <p>Guru Mata Pelajaran PKWU</p>
        </div>
        <div class="profile-card">
            <img src="buazizah.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Azizah Khoiro Nisah, S.Pd</h3>
            <p>Guru Mata Pelajaran DPK/MPP(RPL)</p>
        </div>
        <div class="profile-card">
            <img src="buanisa.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Anisha Oktaviana, S.Pd</h3>
            <p>Guru Mata Pelajaran Informatika/MKK/MPP(Animasi)</p>
        </div>
        <div class="profile-card">
            <img src="buanggi.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Anggi Laras Pratiwi, S.Sn</h3>
            <p>Guru Mata Pelajaran DPK/Seni Budaya/MPP</p>
        </div>
        <div class="profile-card">
            <img src="paknurhadi.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Nurhadi Yahya, S.Ds</h3>
            <p>Guru Mata Pelajaran Informatika/MKK(DKV)</p>
        </div>
        <div class="profile-card">
            <img src="bufadillah.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Nurhayatul Fadillah, S.Pd</h3>
            <p>Guru Mata Pelajaran MKK(RPL)</p>
        </div>
        <div class="profile-card">
            <img src="pakrahmat.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Rahmat Setiawan, S.Ds</h3>
            <p>Guru Mata Pelajaran MKK(DKV)</p>
        </div>
        <div class="profile-card">
            <img src="bufonny.jpeg" alt="Foto Guru Mata Pelajaran">
            <h3>Fonny Krisnawulan P, S.Ds</h3>
            <p>Guru Mata Pelajaran DPK/MKK(Animasi)</p>
        </div>
        <div class="profile-card">
            <img src="bukisti.jpg" alt="Foto Guru Mata Pelajaran">
            <h3>Qisthina Arsi Febriani, S.Psi</h3>
            <p>Guru Mata Pelajaran BK</p>
        </div>
        <div class="profile-card">
            <img src="pakarif.png" alt="Foto Guru Mata Pelajaran">
            <h3>Arif Rahmadi, S.Pd.I</h3>
            <p>Guru Mata Pelajaran Pendidikan Agama Islam</p>
        </div>
    </div>

    <div class="line-with-text">
        <span>Wali Kelas</span>
    </div>
    <div class="profile-row">
        <div class="profile-card">
            <img src="paksigit.jpeg" alt="Foto Wali Kelas">
            <h3>Sigit Prasetyo, S.Pd</h3>
            <p>Wali Kelas X RPL 1</p>
        </div>
        <div class="profile-card">
            <img src="buazizah.jpeg" alt="Foto Wali Kelas">
            <h3>Azizah Khoiro Nisah, S.Pd</h3>
            <p>Wali Kelas X RPL 2</p>
        </div>
        <div class="profile-card">
            <img src="paknur.jpeg" alt="Foto Wali Kelas">
            <h3>Nur Muhammad Sapi'ie, S.Pd</h3>
            <p>Wali Kelas X DKV 1</p>
        </div><div class="profile-card">
            <img src="buanggi.jpeg" alt="Foto Wali Kelas">
            <h3>Anggi Laras Pratiwi, S.Sn</h3>
            <p>Wali Kelas X DKV 2</p>
        </div>
        <div class="profile-card">
            <img src="budalilah.jpeg" alt="Foto Wali Kelas">
            <h3>Dalilah, S.Pd</h3>
            <p>Wali Kelas X Animasi 1</p>
        </div>
        <div class="profile-card">
            <img src="bumaidya.jpeg" alt="Foto Wali Kelas">
            <h3>Maidya Nengsih, S.Pd</h3>
            <p>Wali Kelas X Animasi 2</p>
        </div>
        <div class="profile-card">
            <img src="bufadillah.jpeg" alt="Foto Wali Kelas">
            <h3>Nurhayatul Fadillah, S.Pd</h3>
            <p>Wali Kelas XI RPL 1</p>
        </div>
        <div class="profile-card">
            <img src="budwi.jpeg" alt="Foto Wali Kelas">
            <h3>Dwi Yuniastuti, S.Pd</h3>
            <p>Wali Kelas XI RPL 2</p>
        </div>
        <div class="profile-card">
            <img src="pakadi.jpeg" alt="Foto Wali Kelas">
            <h3>Dwiadi Eliyanto, S.Pd</h3>
            <p>Wali Kelas XI DKV 1</p>
        </div>
        <div class="profile-card">
            <img src="pakusman.jpeg" alt="Foto Wali Kelas">
            <h3>Muhammad Usman, S.S.I</h3>
            <p>Wali Kelas XI DKV 2</p>
        </div>
        <div class="profile-card">
            <img src="bufonny.jpeg" alt="Foto Wali Kelas">
            <h3>Fonny Krisnawulan P, S.Ds</h3>
            <p>Wali Kelas XI Animasi 1</p>
        </div>
        <div class="profile-card">
            <img src="bumiftah.jpeg" alt="Foto Wali Kelas">
            <h3>Miftahul Zannah, S.Pd</h3>
            <p>Wali Kelas XI Animasi 2</p>
        </div>
        <div class="profile-card">
            <img src="paksam.jpeg" alt="Foto Wali Kelas">
            <h3>Samuel Wicaksana, M.Pd</h3>
            <p>Wali Kelas XII RPL</p>
        </div>
        <div class="profile-card">
            <img src="bufarah.jpeg" alt="Foto Wali Kelas">
            <h3>Faradillah Aryani, S.T</h3>
            <p>Wali Kelas XII DKV</p>
        </div>
        <div class="profile-card">
            <img src="bumaxi.jpeg" alt="Foto Wali Kelas">
            <h3>Dra. Maxi Noviyanti</h3>
            <p>Wali Kelas XII Animasi</p>
        </div>
    </div>
</body>
</html>
