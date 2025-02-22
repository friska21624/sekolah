<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Tambah Data Nilai</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Lato', sans-serif;
            margin: 0;
            padding: 0;
            background-color: paleturquoise;
            background-size: cover;
            color: #495057;
            height: 100vh;
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

        .outer {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .judul {
            font-size: 26px;
            text-align: center;
            margin-bottom: 25px;
            color: black;
        }

        .container form {
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
        }

        th, td {
            padding: 14px;
            vertical-align: middle;
        }

        th {
            text-align: left;
            font-weight: 600;
            color: black;
        }

        td {
            background-color: transparent;
        }

        input[type="text"], input[type="number"], select {
            width: calc(100% - 28px);
            padding: 12px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            font-size: 16px;
            background-color: transparent;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        .button-container {
            text-align: right;
            padding-top: 15px;
        }

        input[type="submit"], input[type="reset"] {
            padding: 12px 25px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s;
        }

        input[type="reset"] {
            background-color: #dc3545;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="reset"]:hover {
            background-color: #c82333;
        }

        /* Tabel Data */
        table[border="1"] {
            width: 100%;
            margin-top: 30px;
            border: none;
        }

        table[border="1"] th {
            background-color: #343a40;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
        }

        table[border="1"] td {
            padding: 15px;
            text-align: center;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table[border="1"] td a {
            color: #007bff;
            text-decoration: none;
        }

        table[border="1"] td a:hover {
            text-decoration: underline;
        }

        table[border="1"] td .fas {
            margin-right: 5px;
        }

        /* Link Edit dan Delete */
        .edit-button, .delete-button {
            color: #007bff;
            cursor: pointer;
            transition: color 0.3s;
        }

        .edit-button:hover, .delete-button:hover {
            color: #0056b3;
        }

        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black background with opacity */
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-content h2 {
            margin-top: 0;
        }

        .modal-content form {
            display: flex;
            flex-direction: column;
        }

        .modal-content form label {
            margin: 10px 0 5px;
        }

        .modal-content form input,
        .modal-content form select {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .modal-content form button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .modal-content form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<header>
        <span class="logo">FORM NIAI</span>
        <nav>
            <a href="dasboard.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="Mapel.php">Mata Pelajaran</a>
            <a href="belajarr2.php">Form Nilai</a>
            <a href="contact.php">Contact</a>
            <a href="logout.php">Log Out</a>
        </nav>
    </header>
<div class="outer">
    <h2 class="judul">TAMBAH DATA NILAI</h2>
    <div class="container">
        <form action="tambah-siswa.php" method="POST" id="form">
            <table>
                <tr>
                    <th>NISN</th>
                    <td><input type="text" name="nisn" placeholder="Masukkan Nomor" required></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" placeholder="Masukkan Nama" required></td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>
                        <select name="kelas" required>
                            <option value="Pilih Kelas">Pilih Kelas</option>
                            <option value="XI RPL 1">XI RPL 1</option>
                            <option value="XI RPL 2">XI RPL 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Nilai</th>
                    <td><input type="number" name="nilai" placeholder="Input Nilai" required></td>
                </tr>
                <tr>
                    <td colspan="2" class="button-container">
                        <input type="reset" value="Reset">
                        <input type="submit" name="simpan" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<table border="1">
    <thead>
        <tr>
            <th colspan="7">Nilai XI RPL 2</th>
        </tr>
        <tr>
            <td>No</td>
            <td>Nisn</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Nilai</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include 'koneksi1.php';
        $no = 1;
        $data = mysqli_query($conn, "select * from daftar_nilaii");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td><?php echo $d['nilai']; ?></td>
                <td><center><a href="javascript:void(0)" class="edit-button" data-nisn="<?php echo $d['nisn']; ?>" data-nama="<?php echo $d['nama']; ?>" data-kelas="<?php echo $d['kelas']; ?>" data-nilai="<?php echo $d['nilai']; ?>"><i class="fas fa-pen"></i> edit</a></center></td>
                <td><center><a href="hapus-siswa.php?nisn=<?php echo $d['nisn']; ?>" class="delete-button"><i class="fas fa-trash"></i> delete</a></center></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<!-- Modal Edit -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Edit Data Nilai</h2>
        <form id="editForm" action="edit-siswa.php" method="POST">
            <input type="hidden" name="nisn" id="editNisn">
            <label for="editNama">Nama:</label>
            <input type="text" id="editNama" name="nama" placeholder="Masukkan Nama" required>
            
            <label for="editKelas">Kelas:</label>
            <select id="editKelas" name="kelas" required>
                <option value="">Pilih Kelas</option>
                <option value="XI RPL 1">XI RPL 1</option>
                <option value="XI RPL 2">XI RPL 2</option>
            </select>
            
            <label for="editNilai">Nilai:</label>
            <input type="number" id="editNilai" name="nilai" placeholder="Input Nilai" required>
            
            <button type="submit">Save Changes</button>
        </form>
    </div>
</div>

<script>
// Get modal element
var modal = document.getElementById("editModal");

// Get open modal button
var editButtons = document.querySelectorAll('.edit-button');

// Get close button
var span = document.getElementsByClassName("close")[0];

// Function to open modal
function openModal(nisn, nama, kelas, nilai) {
    document.getElementById('editNisn').value = nisn;
    document.getElementById('editNama').value = nama;
    document.getElementById('editKelas').value = kelas;
    document.getElementById('editNilai').value = nilai;
    modal.style.display = "block";
}

// Add event listener to close button
span.onclick = function() {
    modal.style.display = "none";
}

// Close modal if user clicks outside of the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Add event listeners to edit buttons
editButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        var nisn = this.getAttribute('data-nisn');
        var nama = this.getAttribute('data-nama');
        var kelas = this.getAttribute('data-kelas');
        var nilai = this.getAttribute('data-nilai');
        openModal(nisn, nama, kelas, nilai);
    });
});
</script>
</body>
</html>
