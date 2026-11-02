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
    <title>Materi 2 - Dasar-Dasar Hardware pada Komputer</title>
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
                body: JSON.stringify({ materi: 'Materi 2', nisn: '<?php echo $nisn; ?>' })
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

        <h3>Pengertian Komputer</h3>
        <p>Komputer diawali sebagai mesin yang ukurannya sebesar sebuah ruangan yang melakukan tugas-tugas sederhana seperti aritmatika dengan sangat cepat. Sebagian besar sirkuitnya terdiri atas tabung hampa udara seukuran bola lampu kecil. Transistor dan chip di atas wafer silikon menggantikan komponen elektronik tabung hampa dengan konsekuensi penurunan biaya manufaktur yang mengakibatkan meningkatnya permintaan akan komputer. Kecepatan pengolahan komputer terus mengalami peningkatan seiring dengan menyusutnya ukuran fisik dari komponen-komponen tersebut.</p>
        <p>Komputer yang kita kenal sekarang, seperti komputer pribadi (Personal Computer/PC), berawal dari mesin yang disebut Electronic Numerical Integrator and Calculator (ENIAC), yang dikembangkan pada tahun 1946.</p>
        <h3>Sejarah Komputer</h3>
        <p><strong>Generasi Pertama</strong><br>
            Komputer generasi pertama menggunakan tabung vakum sebagai komponen utamanya. Contoh komputer generasi pertama adalah ENIAC dan UNIVAC. Komputer ini memiliki ukuran yang sangat besar dan membutuhkan daya listrik yang besar pula.</p>
        <p><strong>Generasi Kedua</strong><br>
            Komputer generasi kedua menggunakan transistor sebagai pengganti tabung vakum. Penggunaan transistor ini membuat komputer menjadi lebih kecil dan lebih hemat energi dibandingkan dengan komputer generasi pertama.</p>
        <p><strong>Generasi Ketiga</strong><br>
            Komputer generasi ketiga menggunakan Integrated Circuit (IC), yang memungkinkan banyak transistor digabungkan dalam satu chip. Hal ini mengurangi ukuran dan biaya produksi komputer, serta meningkatkan efisiensi.</p>
        <p><strong>Generasi Keempat</strong><br>
            Komputer generasi keempat menggunakan microprocessor, yang membuat komputer menjadi semakin kecil dan lebih murah. Contoh komputer generasi keempat adalah komputer pribadi (PC) yang digunakan saat ini.</p>
            
        <a href="#" class="btn-finish" onclick="markAsCompleted(); return false;">Selesai Membaca</a>
    </div>
</body>

</html>
