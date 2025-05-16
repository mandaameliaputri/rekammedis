<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kd_dokter = $_POST['kode_dokter'];
    $kd_poli = $_POST['kode_poli'];
    $tgl_kunjungan = $_POST['tanggal_kunjungan'];
    $kd_user = $_POST['kode_user'];
    $nm_dokter = $_POST['nama_dokter'];
    $SIP = $_POST['sip'];
    $tmpt_lhr = $_POST['tempat_lahir'];
    $no_tlp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO dokter (kd_dokter, kd_poli, tgl_kunjungan, kd_user, nm_dokter, SIP, tmpt_lhr, no_tlp, alamat)
            VALUES ('$kd_dokter', '$kd_poli', '$tgl_kunjungan', '$kd_user', '$nm_dokter', '$SIP', '$tmpt_lhr', '$no_tlp', '$alamat')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan! <a href='list_dokter.php'>Lihat Data</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
