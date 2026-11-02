<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FunLearn || Dashboard</title>

<!-- CSS and Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

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
        color: white;
        font-weight: bold;
        text-transform: uppercase;
        padding: 10px 20px;
        cursor: pointer;
    }
    .navbar .nav-links {
        display: flex;
        gap: 10px;
    }
    .navbar .nav-links a, .navbar  {
        color: white;
        text-decoration: none;
        font-size: 18px;
        padding: 10px 20px;
        border-radius: 20px;
        transition: background-color 0.3s;
    }


    .navbar .nav-links a:hover, .navbar .dropdown-toggle:hover {
        background-color: white;
        color: #31E48D;
    }

    a {
        text-decoration: none;
        background-color: #31E48D;
        color: white;
        margin-bottom: 5px;
    }
    .dropdown-toggle{
        color: #31E48D;
        margin-top: -500px;
    }

    .dropdown {
        margin-top: 12px;
    }
    .navbar .user-info {
        color: white;
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .user {
        border: 2px solid white;
    }

    .home {
        border: 2px solid white;
    }

    .rangking {
        border: 2px solid white;
    }

    .dropdown-toggle {
        border: 2px solid white;

    }


    .user-info .signout-link {
        color: #31E48D;
        background-color: white;
        padding: 8px 15px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 18px;
    }
    .user-info .signout-link:hover {
        background-color: #28c77f;
        color: white;
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

.dropdown-menu {
    background: white;
    border-radius: 20px;
    padding: 4px;
}

</style>
</head>

<body>
<?php
include_once 'dbConnection.php';
session_start();
$email = $_SESSION['email'];
if (!isset($_SESSION['email'])) {
    header("location:index.php");
    exit();
} else {
    $name = $_SESSION['name'];
}
?>

<!-- Unified Navbar with Quiz Dropdown -->
<nav class="navbar">
    <div class="nav-logo">FunLearn</div>
    <div class="nav-links">
        <a href="dash.php?q=0" class="home" >Home</a>
        <a href="dash.php?q=1" class="user">User</a>
        <a href="dash.php?q=2" class="rangking">Ranking</a>

        <!-- Quiz Dropdown Menu -->
        <div class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quiz <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="dash.php?q=4" class="add">Add Quiz</a></li>
                <li><a href="dash.php?q=5" class="remove">Remove Quiz</a></li>
            </ul>
        </div>
    </div>
    <div class="user-info">
        <span>Hello, <?php echo $name; ?></span>
        <a href="logout.php?q=account.php" class="signout-link">Signout</a>
    </div>
</nav>

<!-- Content -->
<div class="container">
<div class="row">
<div class="col-md-12">

<!-- Home Content Start -->
<?php if(@$_GET['q']==0) { ?>
    <div class="landing-content">
        <div class="landing-text">
            <h2>Haloo...</h2>
            <h2>Selamat Datang Admin</h2>
            <p>Kelola dan Pantau Semua Aktivitas Pengguna Sesuai kebutuhan.</p>
            <a href="account.php?q=materi" class="btn-start">Mulai Sekarang</a>
        </div>
        <img src="image/photoremovebgpreview25528-q93t-500w.png" alt="Landing Image" class="landing-image" />
    </div>
<?php } ?>
<!-- Home Content End -->




<!-- User Section Start -->
<?php if(@$_GET['q']==1) { ?>
<div class="panel">
    <div class="table-responsive">
        <table class="table table-striped title1">
            <tr><td><b>S.N.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>School</b></td><td><b>NISN</b></td><td><b>Phone</b></td><td></td></tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM user") or die('Error');
            $c=1;
            while($row = mysqli_fetch_array($result)) {
                $name = $row['name'];
                $mob = $row['mob'];
                $gender = $row['gender'];
                $nisn = $row['nisn'];
                $college = $row['college'];
                // Menambahkan link delete dengan konfirmasi
                echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$nisn.'</td><td>'.$mob.'</td>
                <td><a href="javascript:void(0);" onclick="confirmDelete(\''.$nisn.'\');" title="Delete User"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
            }
            ?>
        </table>
    </div>
</div>
<?php } ?>
<!-- User Section End -->

<script>
// Fungsi konfirmasi sebelum penghapusan
function confirmDelete(nisn) {
    var confirmation = confirm("Are you sure you want to delete this user?");
    if (confirmation) {
        // Jika pengguna mengonfirmasi, redirect ke URL penghapusan
        window.location.href = "update.php?demail=" + nisn;
    }
}
</script>


<!-- Ranking Section Start -->
<?php if(@$_GET['q']==2) { ?>
<div class="panel">
    <div class="table-responsive">
        <table class="table table-striped title1">
            <tr style="color:red"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>
            <?php
            $q = mysqli_query($con, "SELECT * FROM `rank` ORDER BY score DESC") or die("Error Ranking: " . mysqli_error($con));
            $c=1;
            while($row = mysqli_fetch_array($q)) {
                $e = $row['nisn'];
                $s = $row['score'];
                $q12 = mysqli_query($con,"SELECT * FROM user WHERE nisn='$e'") or die('Error231');
                while($row = mysqli_fetch_array($q12)) {
                    $name = $row['name'];
                    $gender = $row['gender'];
                    $college = $row['college'];
                }
                echo '<tr><td style="color:#99cc32"><b>'.$c++.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td><td>';
            }
            ?>
        </table>
    </div>
</div>
<?php } ?>
<!-- Ranking Section End -->



<!-- Add Quiz Start -->
<?php if(@$_GET['q'] == 4) { ?>
<!-- Step 1: Quiz Details -->
<div class="row">
    <div class="col-md-12 text-center">
        <h2 class="title1"><b>Enter Quiz Details</b></h2>
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form class="form-horizontal title1" name="form" action="update.php?q=addquiz" method="POST">
            <fieldset>
                <div class="form-group">
                    <label class="col-md-12 control-label" for="name"></label>  
                    <div class="col-md-12">
                        <input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="total"></label>  
                    <div class="col-md-12">
                        <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="right"></label>  
                    <div class="col-md-12">
                        <input id="right" name="right" placeholder="Enter marks for correct answer" class="form-control input-md" min="0" type="number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="wrong"></label>  
                    <div class="col-md-12">
                        <input id="wrong" name="wrong" placeholder="Enter minus marks for wrong answer" class="form-control input-md" min="0" type="number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="time"></label>  
                    <div class="col-md-12">
                        <input id="time" name="time" placeholder="Enter time limit for the test (minutes)" class="form-control input-md" min="1" type="number">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="tag"></label>  
                    <div class="col-md-12">
                        <input id="tag" name="tag" placeholder="Enter #tag for search" class="form-control input-md" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-12 control-label" for="desc"></label>  
                    <div class="col-md-12">
                        <textarea rows="8" cols="8" name="desc" class="form-control" placeholder="Write description here..."></textarea>  
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-12 text-center">
                        <input type="submit" class="btn btn-primary" value="Submit"/>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<!-- Step 1 End -->

<!-- Step 2: Question Details -->
<?php
if(@$_GET['q'] == 4 && (@$_GET['step']) == 2) {
    echo '
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="title1"><b>Enter Question Details</b></h2>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form class="form-horizontal title1" name="form" action="update.php?q=addqns&n=' . @$_GET['n'] . '&eid=' . @$_GET['eid'] . '&ch=4" method="POST">
                <fieldset>';
    
    for($i = 1; $i <= @$_GET['n']; $i++) {
        echo '<b>Question number ' . $i . ' :</b><br />
        <div class="form-group">
            <label class="col-md-12 control-label" for="qns' . $i . '"></label>  
            <div class="col-md-12">
                <textarea rows="3" cols="5" name="qns' . $i . '" class="form-control" placeholder="Write question ' . $i . ' here..."></textarea>  
            </div>
        </div>
        <!-- Option a -->
        <div class="form-group">
            <label class="col-md-12 control-label" for="' . $i . '1"></label>  
            <div class="col-md-12">
                <input id="' . $i . '1" name="' . $i . '1" placeholder="Enter option a" class="form-control input-md" type="text">
            </div>
        </div>
        <!-- Option b -->
        <div class="form-group">
            <label class="col-md-12 control-label" for="' . $i . '2"></label>  
            <div class="col-md-12">
                <input id="' . $i . '2" name="' . $i . '2" placeholder="Enter option b" class="form-control input-md" type="text">
            </div>
        </div>
        <!-- Option c -->
        <div class="form-group">
            <label class="col-md-12 control-label" for="' . $i . '3"></label>  
            <div class="col-md-12">
                <input id="' . $i . '3" name="' . $i . '3" placeholder="Enter option c" class="form-control input-md" type="text">
            </div>
        </div>
        <!-- Option d -->
        <div class="form-group">
            <label class="col-md-12 control-label" for="' . $i . '4"></label>  
            <div class="col-md-12">
                <input id="' . $i . '4" name="' . $i . '4" placeholder="Enter option d" class="form-control input-md" type="text">
            </div>
        </div>
        <br />
        <b>Correct answer:</b><br />
        <select id="ans' . $i . '" name="ans' . $i . '" class="form-control input-md">
            <option value="a">Select answer for question ' . $i . '</option>
            <option value="a">Option a</option>
            <option value="b">Option b</option>
            <option value="c">Option c</option>
            <option value="d">Option d</option>
        </select><br /><br />';
    }
    
    echo '
    <div class="form-group">
        <div class="col-md-12 text-center">
            <input type="submit" class="btn btn-primary" value="Submit"/>
        </div>
    </div>
    </fieldset>
    </form>
    </div>
    </div>';
}
?>
<!-- Step 2 End -->
<?php } ?>
<!-- Add Quiz End -->


<!-- Remove Quiz Start -->
<?php if(@$_GET['q']==5) { ?>
<div class="panel">
    <div class="table-responsive">
        <table class="table table-striped title1">
            <tr><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total Questions</b></td><td><b>Marks</b></td><td><b>Time Limit</b></td><td></td></tr>
            <?php
            $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
            $c=1;
            while($row = mysqli_fetch_array($result)) {
                $title = $row['title'];
                $total = $row['total'];
                $sahi = $row['sahi'];
                $time = $row['time'];
                $eid = $row['eid'];
                // Menambahkan konfirmasi pada tombol Remove
                echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
                <td><b><a href="javascript:void(0);" onclick="confirmRemove(\''.$eid.'\');" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<b>Remove</b></a></b></td></tr>';
            }
            ?>
        </table>
    </div>
</div>
<?php } ?>

<script>
// Fungsi konfirmasi sebelum penghapusan quiz
function confirmRemove(eid) {
    var confirmation = confirm("Are you sure you want to remove this quiz?");
    if (confirmation) {
        // Jika pengguna mengonfirmasi, redirect ke URL penghapusan quiz
        window.location.href = "update.php?q=rmquiz&eid=" + eid;
    }
}
</script>

<!-- Remove Quiz End -->

</div><!--col-md-12-->
</div><!--row-->
</div><!--container-->
</body>
</html>
