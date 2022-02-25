<?php
if (isset($_POST['kirim'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $NIK = $_POST['NIK'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST['email'];
    $negara = $_POST['negara'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $tahun_lulus = $_POST['tahun_lulus'];
    $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $jalur_pendaftaran = $_POST['jalur_pendaftaran'];
    $mhs = $_POST['mhs'];
    $pilihan_1 = $_POST['pilihan_1'];
    $alternatif_1 = $_POST['alternatif_1'];
    $alternatif_2 = $_POST['alternatif_2'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hasil Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h2>Data Hasil Pendaftaran</h2>
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?= $nama_lengkap  ?></td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td><?= $NIK  ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?= $tempat_lahir ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir </td>
                    <td>:</td>
                    <td><?= $tanggal_lahir  ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $jk  ?></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td><?= $no_telepon  ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $email  ?></td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                    <td><?= $negara  ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?= $agama  ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?= $alamat  ?></td>
                </tr>
                <tr>
                    <td>Tahun Lulus</td>
                    <td>:</td>
                    <td><?= $tahun_lulus  ?></td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td><?= $pendidikan_terakhir  ?></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td>:</td>
                    <td><?= $asal_sekolah  ?></td>
                </tr>
                <tr>
                    <td>Jenis Pendaftaran</td>
                    <td>:</td>
                    <td><?= $mhs  ?></td>
                </tr>
                <tr>
                    <td>Pilihan 1</td>
                    <td>:</td>
                    <td><?= $pilihan_1  ?></td>
                </tr>
                <tr>
                    <td>Alternatif 1</td>
                    <td>:</td>
                    <td><?= $alternatif_1 ?></td>
                </tr>
                <tr>
                    <td>Alternatif 2</td>
                    <td>:</td>
                    <td><?= $alternatif_2 ?></td>
                </tr>
            </table>
            </fieldset>
        </div>
</body>

</html>