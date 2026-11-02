<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Worlds || TEST YOUR SKILL </title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>
    <style>
        @font-face {
            font-family: 'Pixelity Sans';
            src: url('fonts/PixelifySans-Regular.ttf') format('truetype');
        }
        body {
          font-family: 'Pixelity Sans', sans-serif;
            display: flex;
            height: 100vh;
            margin: 0;
        }

        .left-side {
            background-color: white;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .right-side {
            background-color: #31E48D;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
        }

        .login-buttons {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .sub1 {
            background-color: #31E48D;
            border: 2px solid #31E48D;
            color: white;
            border-radius: 15px;
            padding: 8px 18px;
            font-size: 15px;
            height: 40px;
            margin-top: 10px;
        }

        .footer {
            background-color: #31E48D;
            color: white;
            padding: 20px;
            text-align: center;
            border: none;
        }

        .footer a {
            color: white;
            text-decoration: none;
        }

        .footer a:hover {
            color: #f0f0f0;
            border-color: #f0f0f0;
        }

        .panel {
            background-color: #fff;
            border-radius: 25px;
            padding: 20px;
            margin: 20px;
            width: 100%;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        select {
            background-color: white;
            border: 1px solid #31E48D;
            border-radius: 15px;
            padding: 22px;
            width: 100%;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        input[type="password"]:focus,
        select:focus {
            outline: 1px solid #31E48D;
            box-shadow: 0 0 10px #31E48D;
        }

        input.sub {
            background-color: #31E48D;
            border: 1px solid #31E48D;
            border-radius: 15px;
            color: white;
            font-size: 20px;
            padding: 10px;
            width: 100%;
            cursor: pointer;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        input.sub:hover {
            background-color: #28c77f;
            color: white;
        }

        h3 {
            margin-top: 10px;
            margin-bottom: 10px;
            color: #31E48D;
            font-weight: bold;
            font-family: 'Pixelity Sans', sans-serif;
        }

        .user-login {
            color: white;
            border: 2px solid white;
            border-radius: 15px;
            padding: 10px 20px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            margin-left: 10px;
        }

        .user-login:hover {
            background-color: white;
            color: #31E48D;
        }

        h1 {
          text-align: left;
        }
    </style>
</head>

<body>
    <div class="left-side">
        <div class="panel">
            <h3>Daftarkan Akun anda</h3>
            <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="name" name="name" placeholder="Masukan Nama" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="nisn" name="nisn" placeholder="Masukan NISN" class="form-control input-md" type="number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="college" name="college" placeholder="Masukan Sekolah" class="form-control input-md" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="email" name="email" placeholder="Masukan Alamat Email" class="form-control input-md" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="mob" name="mob" placeholder="masukan Nomor Telpon" class="form-control input-md" type="number">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="password" name="password" placeholder="Masukan Password" class="form-control input-md" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input id="cpassword" name="cpassword" placeholder="Konfirmasi Password" class="form-control input-md" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" class="sub" value="Sign Up" />
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

    <div class="right-side">
        <div class="login-buttons">
            <a href="#" class="user-login" data-toggle="modal" data-target="#myModal">User Login</a>
            <a href="#" class="user-login" data-toggle="modal" data-target="#adminModal">Admin Login</a>
        </div>
        <h1 style="color: white; font-weight: bold;">Haloo Selamat Datang</h1>
        <p style="color: white;">Mari coba simulasi perangkat keras komputer dengan pengalaman langsung!</p>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">User Login</span></h4>
                    </div>
                    <div class="modal-body title1">
                        <form role="form" method="POST" action="login.php?q=index.php">
                            <div class="form-group">
                                <label for="nisn">NISN:</label>
                                <input type="number" class="form-control" id="nisn" name="nisn" required placeholder="Enter NISN">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="adminModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">Admin Login</span></h4>
                    </div>
                    <div class="modal-body title1">
                        <form role="form" method="POST" action="admin.php">
                            <div class="form-group">
                                <label for="admin_id">Admin ID:</label>
                                <input type="text" class="form-control" name="uname" required placeholder="Enter Admin ID (e.g., 1111)">
                            </div>
                            <div class="form-group">
                                <label for="admin_pwd">Password:</label>
                                <input type="password" class="form-control" name="password" required placeholder="Enter password (e.g., admin)">
                            </div>
                            <button type="submit" name="login" value="Login" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
