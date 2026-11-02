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
    <title>Materi 3 - Komponen Komputer Dasar</title>
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
                body: JSON.stringify({ materi: 'Materi 3', nisn: '<?php echo $nisn; ?>' })
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
        <h3>Sistem Perangkat Keras Komputer</h3>
        <p><strong>Sistem Perangkat Keras Masukan (Input Device System)</strong><br>
            Sebagai peralatan yang difungsikan untuk memasukkan data ke dalam komputer. Jenis input device yang dimiliki oleh komputer cukup banyak diantaranya:
            <ul>
                <li>Keyboard</li>
                <li>Mouse</li>
                <li>Touchscreen</li>
                <li>Scanner</li>
                <li>Scanner Barcode</li>
                <li>Camera</li>
                <li>Microphone</li>
                <li>Dll</li>
            </ul>
        </p>
        <p><strong>Sistem Perangkat Keras Pemrosesan (Processing Device System)</strong><br>
            Sebagai tempat untuk pengolahan data atau juga dapat dikatakan sebagai otak dari segala aktivitas pengolahan seperti penghitungan, pengurutan, pencarian, penulisan, pembacaan dan sebagainya. Pada CPU terdapat beberapa komponen perangkat seperti:
            <ul>
                <li>Processor</li>
                <li>RAM (Random Access Memory)</li>
                <li>ROM (Read Only Memory)</li>
                <li>Papan Induk/Mother Board</li>
                <li>Cache Memory</li>
            </ul>
        </p>
        <p><strong>Sistem Perangkat Keras Keluaran (Output Device System)</strong><br>
            Sebagai perangkat yang difungsikan untuk mengeluarkan hasil pemrosesan CPU seperti tulisan, grafik, gambar/image, suara dan bentuk khusus yang dapat dibaca oleh mesin. Jenis output device yang dimiliki oleh komputer cukup banyak diantaranya:
            <ul>
                <li>Monitor/Screen/Display</li>
                <li>Speaker</li>
                <li>Printer</li>
                <li>Plotter</li>
                <li>Mesin Fax</li>
                <li>Dll</li>
            </ul>
        </p>
        <p><strong>Sistem Perangkat Keras Peripheral/Accessories Device System</strong><br>
            Difungsikan sebagai penambahan kemampuan dari sistem komputer seperti dapat berbagi file dan data antara komputer. Perangkat peripheral seperti:
            <ul>
                <li>Modem</li>
                <li>Card/Ethernet</li>
                <li>TV Card</li>
                <li>Kartu Grafis / VGA Card</li>
                <li>Kartu Suara / Sound Card</li>
            </ul>
        </p>
        <p><strong>Sistem perangkat keras cadangan (secondary storage/backing storage/ external memory)</strong><br>
            Diperuntukkan sebagai tempat penyimpanan data, file dan program yang berada diluar sistem utama. Contoh perangkat keras cadangan ini adalah sebagai berikut:
            <ul>
                <li>Disket, Hard Disk</li>
                <li>Flash Disk</li>
                <li>Magnetic Tape</li>
                <li>Keping CD/DVD (CD/DVD Room)</li>
                <li>Dll</li>
            </ul>
        </p>
        <a href="#" class="btn-finish" onclick="markAsCompleted(); return false;">Selesai Membaca</a>
    </div>
</body>

</html>
