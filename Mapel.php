<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Pelajaran</title>
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
            color: white;
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

        h1 {
            text-align: center;
            color: black;
            margin: 80px 0 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: #fff;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #cee0f4;
        }

        .day-group {
            background-color: #eaf1ff;
            font-weight: bold;
            border-top: 3px solid #007BFF;
        }

        .day-group td {
            background-color: #eaf1ff;
            border: none;
        }
    </style>
</head>
<body>
    <header>
        <span class="logo">MATA PELAJARAN</span>
        <nav>
            <a href="dasboard.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="Mapel.php">Mata Pelajaran</a>
            <a href="belajarr2.php">Form Nilai</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Log Out</a>
        </nav>
    </header>

    <h1>Jadwal Mata Pelajaran Kelas X</h1>
    <table>
        <tbody>
            <tr>
                <td>Agama</td>
                <td>Arif Rahmadi, S.Pd.I / Samuel Wicaksana, M.Pd</td>
            </tr>
            <tr>
                <td>Bahasa Indonesia</td>
                <td>Sigit Prasetyo, S.Pd</td>
            </tr>
            <tr>
                <td>DPK</td>
                <td>Azizah Khoiro Nisah, S.Pd / Anggi Laras Pratiwi, S.Sn / Khairul Arifin, S.Pd / Miftahul Zannah, S.Pd / Fonny Krisnawulan P, S.Ds</td>
            </tr>
            <tr>
                <td>Bahasa Inggris</td>
                <td>Dalilah, S.Pd</td>
            </tr>
            <tr>
                <td>BK</td>
                <td>Fanny Indriyani, S.Pd / Qisthina Arsi Febriani, S.Psi</td>
            </tr>
            <tr>
                <td>Informatika</td>
                <td>Nanda Arsyia Murti, S.Kom / Nurhadi Yahya, S.Ds / Anisha Oktaviana, S.Pd</td>
            </tr>
            <tr>
                <td>Mulok</td>
                <td>Khairul Arifin, S.Pd</td>
            </tr>
            <tr>
                <td>PKN</td>
                <td>Dra. Suwarni</td>
            </tr>
            <tr>
                <td>MTK</td>
                <td>Nur Muhammad Sapi'ie, S.Pd / Maidya Nengsih, S.Pd</td>
            </tr>
            <tr>
                <td>Seni Budaya</td>
                <td>Anggi Laras Pratiwi, S.Sn</td>
            </tr>
            <tr>
                <td>IPAS</td>
                <td>Chomisari Handayani, S.Pd</td>
            </tr>
            <tr>
                <td>Sejarah</td>
                <td>Dwi Yuniastuti, S.Pd</td>
            </tr>
            <tr>
                <td>PJOK</td>
                <td>Nurina Kartika Ayu, S.Pd</td>
            </tr>
        </tbody>
    </table>


    <h1>Jadwal Mata Pelajaran Kelas XI</h1>
    <table>
        <tbody>
            <tr>
                <td>Agama</td>
                <td>Muhammad Usman, S.S.I / Samuel Wicaksana, M.Pd</td>
            </tr>
            <tr>
                <td>Bahasa Indonesia</td>
                <td>Umi Haniah, S.Pd</td>
            </tr>
            <tr>
                <td>MKK 1</td>
                <td>Nurhayatul Fadillah, S.Pd / Nanda Arsyia Murti, S.Kom / Rahmat Setiawan, S.Ds / Nurhadi Yahya, S.Ds / Miftahul Zannah S.Pd / Anisha Oktaviana, S.Pd</td>
            </tr>
            <tr>
                <td>Bahasa Inggris</td>
                <td>Dwiadi Eliyanto, S.Pd</td>
            </tr>
            <tr>
                <td>BK</td>
                <td>Fanny Indriyani, S.Pd / Qisthina Arsi Febriani, S.Psi</td>
            </tr>
            <tr>
                <td>MPP</td>
                <td>Anisha Oktaviana, S.Pd / Azizah Khoiro Nisah, S.Pd /  Anggi Laras Pratiwi, S.Sn</td>
            </tr>
            <tr>
                <td>Mulok</td>
                <td>Khairul Arifin, S.Pd</td>
            </tr>
            <tr>
                <td>PKN</td>
                <td>Dra. Suwarni</td>
            </tr>
            <tr>
                <td>MTK</td>
                <td>Dra. Maxi Noviyanti / Maidya Nengsih, S.Pd</td>
            </tr>
            <tr>
                <td>PKWU</td>
                <td>Faradillah Aryani, ST</td>
            </tr>
            <tr>
                <td>Sejarah</td>
                <td>Dwi Yuniastuti, S.Pd</td>
            </tr>
            <tr>
                <td>PJOK</td>
                <td>Nurina Kartika Ayu, S.Pd</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
