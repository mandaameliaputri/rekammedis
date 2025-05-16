<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM dokter");
?>

<h2>Data Dokter</h2>
<table border="1" cellpading="10">
    <tr>
        <th>Kode Dokter</th>
        <th>Kode Poli</th>
        <th>Tanggal Kunjungan</th>
        <th>Kode User</th>
        <th>Nama Dokter</th>
        <th>SIP</th>
        <th>Tempat Lahir</th>
        <th>No Telp</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['kd_dokter'] ?></td>
        <td><?= $row['kd_poli'] ?></td>
        <td><?= $row['tgl_kunjungan'] ?></td>
        <td><?= $row['kd_user'] ?></td>
        <td><?= $row['nm_dokter'] ?></td>
        <td><?= $row['SIP'] ?></td>
        <td><?= $row['tmpt_lhr'] ?></td>
        <td><?= $row['no_tlp'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td>
            <a href="edit_dokter.php?kd=<?= $row['kd_dokter'] ?>">Edit</a> | 
            <a href="hapus_dokter.php?kd=<?= $row['kd_dokter'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
