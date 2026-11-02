<?php
session_start();
include_once 'dbConnection.php';
if (!(isset($_SESSION['nisn']))) {
    header("location:index.php");
    exit();
}
$nisn = $_SESSION['nisn'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FunLearn </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font.css">
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

        .navbar {
            background-color: #31E48D;
            border-radius: 30px;
            margin: 20px;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar .nav-logo {
            font-size: 24px;
            color: black;
            font-weight: bold;
            background: white;
            padding: 10px 20px;
            border-radius: 25px;
            cursor: pointer;
        }

        .navbar .nav-links {
            display: flex;
            gap: 5px;
            align-items: center;
            margin-left: 5px;
        }

        .navbar .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            border: 2px solid white;
            border-radius: 30px;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar .nav-links a:hover {
            background-color: white;
            color: #31E48D;
        }

        .signout-link {
            background-color: white;
            color: #31E48D;
            padding: 10px 20px;
            border: 2px solid #31E48D;
            border-radius: 30px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            margin-left: auto;
            font-size: 19px;
        }

        .signout-link:hover {
            background-color: #31E48D;
            color: white;
            border: 2px solid white;
            text-decoration: none;
        }

        .landing-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px;
        }

        .landing-text {
            max-width: 50%;
            margin-left: 80px;
            margin-top: -110px;
        }

        .landing-text h2 {
            color: #31E48D;
            font-size: 56px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .landing-text p {
            color: #333;
            font-size: 18px;
            margin-bottom: 50px;
        }

        .landing-text .btn-start {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            border: 2px solid white;
            border-radius: 30px;
            background-color: #31E48D;
            transition: background-color 0.3s, color 0.3s;
            margin-top: 20px;
        }

        .landing-text .btn-start:hover {
            background-color: white;
            color: #31E48D;
        }

        .landing-image {
            width: 400px;
            margin-right: 50px;
        }

        .footer {
            background-color: #31E48D;
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 40px;
            border-radius: 15px;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            color: #f0f0f0;
        }

        .materi-container {
            padding: 40px;

            border-radius: 20px;
            margin: 20px;

            
        }


        .materi-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .materi-cards {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: wrap;
            min-width: 200px;
            height: 150px;
            
            
        }

        .materi-card {
            background-color: #31E48D;
            border-radius: 20px;
            padding: 20px;
            width: 30%;
            min-width: 200px;
            text-align: center;
            color: white;
            position: relative;
            padding-top: 40px;
            border: 3px solid ;
        }

        .materi-card h3 {
            margin-top: 0;
        }

        .materi-card p {
            margin-bottom: 10px;
        }

        .materi-card .card-arrow {
            position: absolute;
            width: 50px;
            height: 40px;
            top: 10px;
            right: 10px;
            background-color: black;
            color: white;
            border-radius: 20px;
            padding-top:5px;
            padding: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .materi-card .card-arrow:hover {
            background-color: #fff;
            color: #31E48D;
            text-decoration: none;
        }

        .quiz-result {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 15px;
            margin: 20px;
            text-align: center;
        }

        .btn-back {
            background-color: #31E48D;
            color: white;
            padding: 10px 20px;
            border-radius: 15px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-back:hover {
            background-color: #28c77f;
        }

        .panel {
            border-radius: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            
        }

        .btn-1 {
            background-color: #28c77f;
        }

            .btn-start {
            background-color: #31E48D; /* Ganti warna sesuai kebutuhan */
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-start:hover {
            background-color: #85b32e;
        }

        .btn-restart {
            background-color: red;
            color: white;
            padding: 10px 10px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-restart:hover {
            background-color: darkred;
        }

    </style>
    <script>
        $(document).ready(function() {
            $('.nav-logo').click(function() {
                window.location.href = 'account.php?q=0';
            });
        });

        function logoutAndRedirect() {
            window.location.href = 'logout.php';
        }

        function updateProgress(materiId) {
            let completed = JSON.parse(localStorage.getItem('completedMateri')) || [];
            if (!completed.includes(materiId)) {
                completed.push(materiId);
                localStorage.setItem('completedMateri', JSON.stringify(completed));
            }
            calculateProgress();
        }

        function calculateProgress() {
            let completed = JSON.parse(localStorage.getItem('completedMateri')) || [];
            let totalMateri = $('.materi-card').length;
            let percentage = Math.round((completed.length / totalMateri) * 100);

            $('#completed-count').text(completed.length);
            $('#remaining-count').text(totalMateri - completed.length);
            $('#progress-percentage').text(percentage + '%');
        }

        $(document).ready(function() {
            calculateProgress();
            $('.card-arrow').click(function() {
                let materiId = $(this).closest('.materi-card').find('h3').text();
                updateProgress(materiId);
                let materiNumber = materiId.split(' ')[1];
                window.location.href = 'materi_' + materiNumber.toLowerCase() + '.php';
            });
        });
    </script>
</head>

<body>
    <nav class="navbar">
        <div class="nav-logo">FunLearn</div>
        <div class="nav-links">
            <a href="account.php?q=materi">Materi</a>
            <a href="account.php?q=1">Quiz</a>
            <a href="account.php?q=2">History</a>
        </div>
        <a href="logout.php" class="signout-link" onclick="logoutAndRedirect(); return false;">Logout</a>
    </nav>

    <?php
    if (@$_GET['q'] == 0) {
        echo '<div class="landing-content">
                <div class="landing-text">
                    <h2>Haloo...</h2>
                    <h2>Selamat Datang</h2>
                    <p>Mari coba simulasi perangkat keras komputer dengan pengalaman langsung.</p>
                    <a href="account.php?q=materi" class="btn-start">Mulai Sekarang</a>
                </div>
                  <img src="image/photoremovebgpreview25528-q93t-500w.png" alt="Landing Image" class="landing-image" />
              </div>';
    }

    if (@$_GET['q'] == 'materi') {
        echo '<div class="materi-container">
                <div class="materi-header">
                    <h2>Halo! Ini adalah Materi</h2>
                    <p>Kamu sedang berada pada halaman materi. Mari mulai pelajari materi yang tersedia.</p>
                </div>
                <div class="materi-progress">
                    <div style="display: flex; justify-content: space-around; margin-bottom: 30px;">
                        <div style="background-color: black; color: white; padding-left:30px; padding-right: 300px; border-radius: 15px; margin-left:0px;">
                            <h3 id="completed-count">0</h3>
                            <p>Materi Selesai</p>
                        </div>
                        <div style="background-color: black; color: white; padding-left:30px; padding-right: 300px; border-radius: 15px; margin-left:-21px;">
                            <h3 id="remaining-count">3</h3>
                            <p>Materi Belum Selesai</p>
                        </div>
                        <div style="background-color: #31E48D; color: black; padding: 20px; padding-left: 30; padding-right: 150px; border-radius: 15px; margin-left:-25px">
                            <h3 id="progress-percentage">0%</h3>
                            <p>Progress</p>
                        </div>
                    </div>
                </div>
                <div class="materi-cards">
                    <div class="materi-card">
                        <h3>Materi 1</h3>
                        <p>Pengenalan Komputer</p>
                        <a href="materi_1.php" class="card-arrow">&rarr;</a>
                    </div>
                    <div class="materi-card">
                        <h3>Materi 2</h3>
                        <p>Apa itu Komputer?</p>
                        <a href="materi_2.php" class="card-arrow">&rarr;</a>
                    </div>
                    <div class="materi-card">
                        <h3>Materi 3</h3>
                        <p>Macam-Macam Jenis Komputer</p>
                        <a href="materi_3.php" class="card-arrow">&rarr;</a>
                    </div>
                </div>
              </div>';
    }

    if (@$_GET['q'] == 1) {
        $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
        echo '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
        <tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
        $c = 1;
        while ($row = mysqli_fetch_array($result)) {
            $title = $row['title'];
            $total = $row['total'];
            $sahi = $row['sahi'];
            $time = $row['time'];
            $eid = $row['eid'];
            $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND nisn='$nisn'") or die('Error98');
            $rowcount = mysqli_num_rows($q12);
            if ($rowcount == 0) {
                echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
                <td><b><a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1 btn-start">
                    <span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b class="btn-title">Start</b></span></a></b></td></tr>';
            } else {
                echo '<tr style="color:#99cc32"><td>' . $c++ . '</td><td>' . $title . '&nbsp;<span title="This quiz is already solved by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $time . '&nbsp;min</td>
                <td><b><a href="update.php?q=quizre&step=25&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1 btn-restart">
                    <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></td></tr>';
            }
            
        }
        echo '</table></div></div>';
    }

    if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
        $eid = @$_GET['eid'];
        $sn = @$_GET['n'];
        $total = @$_GET['t'];
        $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn'") or die('Error');
        echo '<div class="panel" style="margin:5%">';
        while ($row = mysqli_fetch_array($q)) {
            $qns = $row['qns'];
            $qid = $row['qid'];
            echo '<b>Question &nbsp;' . $sn . '&nbsp;::<br />' . $qns . '</b><br /><br />';
        }
        $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid'") or die('Error');
        echo '<form action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST" class="form-horizontal">
        <br />';
        while ($row = mysqli_fetch_array($q)) {
            $option = $row['option'];
            $optionid = $row['optionid'];
            echo '<input type="radio" name="ans" value="' . $optionid . '">' . $option . '<br /><br />';
        }
        echo '<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
    }
    
    
    if (@$_GET['q'] == 'result') {
        // Mengambil parameter dari URL dan session
        $eid = isset($_GET['eid']) ? $_GET['eid'] : null;
        $nisn = isset($_SESSION['nisn']) ? $_SESSION['nisn'] : null;
    
        // Pastikan parameter valid
        if ($eid && $nisn) {
            // Ambil hasil kuis dari database
            $result = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND nisn='$nisn'") or die('Error querying history');
    
            // Periksa apakah data ditemukan
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_array($result);
    
                // Ambil data dari database
                $correct_answers = $row['score'];
                $wrong_answers = $row['wrong'];
                $total_time = $row['sahi']; // Waktu dalam detik
    
                // Konversi waktu ke format jam:menit:detik
                $hours = floor($total_time / 3600);
                $minutes = floor(($total_time % 3600) / 60);
                $seconds = $total_time % 60;
                $formatted_time = sprintf("%02d:%02d:%02d", $hours, $minutes, $seconds);
    
                // Menampilkan hasil kuis
                echo '<div class="panel">
                        <h3>Your Quiz Results</h3>
                        <p><strong>Correct Answers:</strong> ' . $correct_answers . '</p>
                        <p><strong>Wrong Answers:</strong> ' . $wrong_answers . '</p>
                        <p><strong>Time Taken:</strong> ' . $formatted_time . '</p>
                        <a href="account.php?q=quiz&eid=' . $eid . '" class="btn btn-primary">Back to Quiz List</a>
                    </div>';
            } else {
                echo '<p>No quiz results found for this user.</p>';
            }
        } else {
            echo '<p>Invalid quiz or user session.</p>';
        }
    }
    
    
    

    if (@$_GET['q'] == 2) {
        $q = mysqli_query($con, "SELECT * FROM history WHERE nisn='$nisn' ORDER BY date DESC") or die('Error197');
        echo '<div class="panel title"><table class="table table-striped title1">
        <tr style="color:red"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
        $c = 0;
        while ($row = mysqli_fetch_array($q)) {
            $eid = $row['eid'];
            $s = $row['score'];
            $w = $row['wrong'];
            $r = $row['sahi'];
            $qa = $row['level'];
            $q23 = mysqli_query($con, "SELECT title FROM quiz WHERE eid='$eid'") or die('Error208');
            while ($row = mysqli_fetch_array($q23)) {
                $title = $row['title'];
            }
            $c++;
            echo '<tr><td>' . $c . '</td><td>' . $title . '</td><td>' . $qa . '</td><td>' . $r . '</td><td>' . $w . '</td><td>' . $s . '</td></tr>';
        }
        echo '</table></div>';
    }

    if (@$_GET['q'] == 3) {
        $q = mysqli_query($con, "SELECT * FROM rank ORDER BY score DESC") or die('Error223');
        echo '<div class="panel title"><div class="table-responsive"><table class="table table-striped title1">
        <tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
        $c = 0;
        while ($row = mysqli_fetch_array($q)) {
            $e = $row['nisn'];
            $s = $row['score'];
            $q12 = mysqli_query($con, "SELECT * FROM user WHERE nisn='$e'") or die('Error231');
            while ($row = mysqli_fetch_array($q12)) {
                $name = $row['name'];
                $gender = $row['gender'];
                $college = $row['college'];
            }
            $c++;
            echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name . '</td><td>' . $gender . '</td><td>' . $college . '</td><td>' . $s . '</td></tr>';
        }
        echo '</table></div></div>';
    }
    ?>

</body>

</html>

