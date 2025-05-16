<?php
include 'koneksi.php';
$kd = $_GET['kd'];

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM dokter WHERE kd_dokter='$kd'"));

if(isset($_POST['update'])){
    $kd_poli = $_POST['kd_poli'];
    $tgl_kunjungan = $_POST['tgl_kunjungan'];
    $kd_user = $_POST['kd_user'];
    $nama_dokter = $_POST['nama_dokter'];
    $sip = $_POST['sip'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE dokter SET 
            kd_poli='$kd_poli', 
            tgl_kunjungan='$tgl_kunjungan', 
            kd_user='$kd_user', 
            nama_dokter='$nama_dokter', 
            sip='$sip', 
            tempat_lahir='$tempat_lahir', 
            no_telp='$no_telp', 
            alamat='$alamat' 
            WHERE kd_dokter='$kd'";

    mysqli_query($conn, $sql);
    header("Location: list_dokter.php");
}
?>

<form method="post">
    Kode Poli: <input type="text" name="kd_poli" value="<?= $data['kd_poli'] ?>"><br>
    Tanggal Kunjungan: <input type="date" name="tgl_kunjungan" value="<?= $data['tgl_kunjungan'] ?>"><br>
    Kode User: <input type="text" name="kd_user" value="<?= $data['kd_user'] ?>"><br>
    Nama Dokter: <input type="text" name="nama_dokter" value="<?= $data['nm_dokter'] ?>"><br>
    SIP: <input type="text" name="sip" value="<?= $data['SIP'] ?>"><br>
    Tempat Lahir: <input type="text" name="tempat_lahir" value="<?= $data['tmpt_lhr'] ?>"><br>
    No Telp: <input type="text" name="no_telp" value="<?= $data['no_tlp'] ?>"><br>
    Alamat: <input type="text" name="alamat" value="<?= $data['alamat'] ?>"><br>
    <button type="submit" name="update">Update</button>
</form>
