<!DOCTYPE html>
<html>
<head>
    <title>Form Dokter - Medica Care</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #eeeeee;
        }

        .navbar, .sidebar {
            background-color: #c2c7d8;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 10px 20px;
            align-items: center;
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

        .menu {
            display: flex;
            gap: 15px;
        }

        .menu a {
            padding: 10px 20px;
            border: 1px solid #333;
            border-radius: 20px;
            text-decoration: none;
            background-color: #aab0cb;
            color: black;
        }

        .container {
            display: flex;
            height: calc(100vh - 70px);
        }

        .sidebar {
            width: 200px;
            padding: 20px;
            border-right: 1px solid #333;
        }

        .sidebar button {
            display: block;
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #333;
            background-color: white;
        }

        .form-container {
            flex: 1;
            padding: 40px;
            background-color: #f2f2f2;
        }

        .form-group {
            display: flex;
            margin-bottom: 15px;
            align-items: center;
        }

        .form-group label {
            width: 150px;
        }

        .form-group input {
            padding: 6px;
            width: 300px;
        }

        .form-actions {
            margin-top: 20px;
        }

        .form-actions input {
            padding: 8px 16px;
            margin-right: 10px;
            border-radius: 10px;
            border: 1px solid #333;
            background-color: white;
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

<div class="container">
    <div class="sidebar">
        <button><a href="dokter.php">dokter</a></button>
        <button><a href="poliklinik.php">poliklinik</a></button>
    </div>
    <div class="form-container">
        <form method="POST" action="simpan_dokter.php">
            <div class="form-group">
                <label>Kode Dokter</label>
                <input type="text" name="kode_dokter">
            </div>
            <div class="form-group">
                <label>Kode Poli</label>
                <input type="text" name="kode_poli">
            </div>
            <div class="form-group">
                <label>Tanggal Kunjungan</label>
                <input type="date" name="tanggal_kunjungan">
            </div>
            <div class="form-group">
                <label>Kode User</label>
                <input type="text" name="kode_user">
            </div>
            <div class="form-group">
                <label>Nama Dokter</label>
                <input type="text" name="nama_dokter">
            </div>
            <div class="form-group">
                <label>SIP</label>
                <input type="text" name="sip">
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir">
            </div>
            <div class="form-group">
                <label>No Telp</label>
                <input type="text" name="no_telp">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat">
            </div>
            <div class="form-actions">
                <input type="submit" value="submit">
                <input type="reset" value="reset">
            </div>
        </form>
    </div>
</div>

</body>
</html>
