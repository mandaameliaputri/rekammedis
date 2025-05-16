<?php
session_start();
include 'koneksi.php';

$login_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd_user = $_POST['kode_user'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek apakah user sudah ada
    $sql = "SELECT * FROM login WHERE kd_user=? AND username=?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $kd_user, $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        // Verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['kd_user'] = $user['kd_user'];
            $_SESSION['username'] = $user['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $login_error = "Password salah!";
        }
    } else {
        // Jika belum ada, buat akun baru
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $insert_sql = "INSERT INTO login (kd_user, username, password) VALUES (?, ?, ?)";
        $insert_stmt = mysqli_prepare($conn, $insert_sql);
        mysqli_stmt_bind_param($insert_stmt, "sss", $kd_user, $username, $password_hash);
        if (mysqli_stmt_execute($insert_stmt)) {
            $_SESSION['kd_user'] = $kd_user;
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $login_error = "Gagal membuat akun baru.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { background: #ccd3e1; font-family: Arial; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-box { background: #a4abc8; padding: 40px; border-radius: 20px; box-shadow: 0 0 10px #0003; text-align: center; }
        input { padding: 10px; margin: 10px 0; width: 250px; border-radius: 20px; border: 1px solid #000; }
        button { padding: 10px 20px; border-radius: 20px; margin: 5px; }
        .error { color: red; margin-top: 10px; }
    </style>
</head>
<body>
    <form method="POST" class="login-box">
        <h2>Login</h2>
        <input type="text" name="kode_user" placeholder="Kode User" required><br>
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
        <button type="reset">Reset</button>
        <?php if ($login_error): ?>
            <div class="error"><?= $login_error ?></div>
        <?php endif; ?>
    </form>
</body>
</html>
