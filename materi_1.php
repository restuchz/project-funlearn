<?php
session_start();
include_once 'dbConnection.php';
if (!(isset($_SESSION['nisn']))) {
    header("location:index.php");
    exit();
}
$nisn = $_SESSION['nisn'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi 1 - Pengenalan Komputer</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link href="fonts/PixelifySans-Regular.ttf" rel="stylesheet" type="text/css">
    <style>
        @font-face {
            font-family: 'Pixelity Sans';
            src: url('fonts/PixelifySans-Regular.ttf') format('truetype');
        }

        body {
            font-family: 'Pixelity Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .content {
            max-width: 1000px;
            margin: auto;
            background: #31E48D;
            padding: 40px;
            border-radius: 15px;
            color: white;
            margin-top: 40px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .content h2 {
            font-size: 42px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .content h3 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 20px;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .btn-finish {
            display: inline-block;
            color: white;
            text-decoration: none;
            font-size: 20px;
            padding: 15px 30px;
            background-color: black;
            border-radius: 15px;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-finish:hover {
            background-color: white;
            color: #31E48D;
        }
    </style>
    <script>
        function markAsCompleted() {
            fetch('updateProgress.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ materi: 'Materi 1', nisn: '<?php echo $nisn; ?>' })
            }).then(response => {
                if (response.ok) {
                    window.location.href = 'account.php?q=materi&completed=1';
                } else {
                    alert('Gagal memperbarui progres. Coba lagi.');
                }
            });
        }
    </script>
</head>

<body>
    <div class="content">
        <h3>Pendahuluan</h3>
        <p>Komputer telah digunakan untuk aplikasi bisnis sejak sekitar pertengahan tahun 1950-an, sejak saat itu perangkat keras (hardware) dan perangkat lunak (software) mendapatkan kemajuan yang fantastis. Pesatnya perkembangan dibidang teknologi informasi dan komunikasi (Information and Communication of Technology/ ICT), telah meminimalisasi pemakaian pena dan kertas. ICT lebih menjadikan istilah virtual semakin akrab dengan kegiatan perkantoran modern. Kegiatan tulis menulis atau catat mencatat dan membuat laporan, sekarang ini telah berbasiskan ICT. ICT telah mengambil alih fungsi-fungsi dari alat tulis kantor yang lama. Data dan informasi sekarang ini telah disimpan dan ditempatkan pada ICT, tidak lagi diatas kertas atau ditumpukan kertas, dilaci-laci meja dan dilemari-lemari kantor. Media tulis menulis dan penyimpanan data semakin beragam, format data, cara-cara penyimpanan data serta pengelolaan data telah mengalami banyak perubahan.</p>
        <p>Komputer diawali sebagai mesin yang ukurannya sama besar dengan sebuah ruangan yang melakukan tugas-tugas sederhana seperti aritmatika dengan sangat cepat. Sebagian besar sirkuitnya terdiri atas tabung hampa udara seukuran bola lampu kecil. Transistor dan chip diatas wafer silikon menggantikan komponen elektronik tabung hampa dengan konsekuensi penurunan biaya manufaktur yang mengakibatkan pada meningkatnya permintaan akan komputer. Kecepatan pengolahan komputer terus mengalami peningkatan seiring dengan menyusutnya ukuran fisik dari komponen-komponen tersebut. Kecepatan elektron yang bergerak melalui sirkuit adalah konstan, menyusutnya ukuran sirkuit komputer menjadi setengah ukuran semula bahkan berpuluh-puluh juta lebih kecil akan melipatgandakan kecepatan pengolahan data dan menurunkan biaya pembuatannya (miniaturisasi).</p>
        <p>Komputer yang kita kenal sekarang seperti komputer pribadi (Personal Computer/PC) berawal dari mesin yang disebut Electronic Numerical Integrator and Calculator (ENIAC), yang dikembangkan pada tahun 1946.</p>
        <a href="#" class="btn-finish" onclick="markAsCompleted(); return false;">Selesai Membaca</a>
    </div>
</body>

</html>
