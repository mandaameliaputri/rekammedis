<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Medica Care</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #eeeeee;
        }

        .navbar {
            background-color: #c2c7d8;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #333;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-circle {
            width: 50px;
            height: 50px;
            border: 2px solid #333;
            border-radius: 50%;
            margin-right: 10px;
        }

        .logo-text {
            font-weight: bold;
            font-size: 18px;
        }

        .menu {
            display: flex;
            gap: 15px;
        }

        .menu a {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 20px;
            border: 1px solid #333;
            background-color: #aab0cb;
            color: black;
            transition: background-color 0.3s;
        }

        .menu a:hover {
            background-color: #9198b5;
        }

        .content {
            text-align: center;
            margin-top: 100px;
            font-size: 28px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <div class="logo-circle"></div>
            <div class="logo-text">medica care</div>
        </div>
        <div class="menu">
            <a href="dashboard.php">home</a>
            <a href="dokter.php">dokter</a>
            <a href="pasien.php">pasien</a>
            <a href="rekam_medis.php">rekam medis</a>
        </div>
    </div>

    <div class="content">
        Selamat datang di web medica care
    </div>
</body>
</html>
