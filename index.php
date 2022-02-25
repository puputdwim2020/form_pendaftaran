<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <h2>Form Pendaftaran Mahasiswa UDB
                <br>Fakultas Ilmu Komputer
            </h2>
            <form action="aksi.php" method="POST">
                <table>
                    <tr>
                        <p>Nama Lengkap</p>
                        <p><input type="text" name="nama_lengkap" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>NIK</p>
                        <p><input type="number" name="NIK" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Tempat Lahir</p>
                        <p><input type="text" name="tempat_lahir" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Tanggal Lahir</p>
                        <p><input type="date" name="tanggal_lahir" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Jenis Kelamin</p>
                        <p>
                            <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
                            <input type="radio" name="jk" value="Perempuan">Perempuan
                        </p>
                    </tr>
                    <tr>
                        <p>No Telepon</p>
                        <p><input type="text" name="no_telepon" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Email</p>
                        <p><input type="text" name="email" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Kewarganegaraan</p>
                        <p>
                            <input type="radio" name="negara" value="WNI">Warga Negara Indonesia
                            <input type="radio" name="negara" value="WNA">Warga Negara Asing
                        </p>
                    </tr>
                    <tr>
                        <p>Agama</p>
                        <p>
                            <select name="agama" style="width:100px; height:25px;">
                                <option>-Agama-</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </p>
                    </tr>
                    <tr>
                        <p>Alamat</p>
                        <p><input type="text" name="alamat" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Tahun Lulus</p>
                        <p><input type="text" name="tahun_lulus" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Pendidikan Terakhir</p>
                        <select name="pendidikan_terakhir" style="width:100px; height:25px;">
                            <option value="SMA" selected> SMA
                            <option value="SMK"> SMK
                            <option value="MA"> MA
                        </select>
                    </tr>
                    <tr>
                        <p>Asal Sekolah</p>
                        <p><input type="text" name="asal_sekolah" style="width: 500px; height: 20px;"></p>
                    </tr>
                    <tr>
                        <p>Pilih jalur pendaftaran</p>
                        <p>
                            <select name="jalur_pendaftaran" style="width:300px; height:25px;">
                                <option value="Reguler">Reguler</option>
                                <option value="Beasiswa Unggulan">Beasiswa Unggulan</option>
                                <option value="Beasiswa KIP">Beasiswa KIP</option>
                                <option value="Beasiswa Yatim">Beasiswa Yatim</option>
                            </select>
                        </p>
                    </tr>
                    <tr>
                        <p>Pilih jenis pendaftaran</p>
                        <p>
                            <input type="radio" name="mhs" value="Mahasiswa Baru">Mahasiswa Baru
                            <input type="radio" name="mhs" value="Transfer/Pindahan">Transfer/Pindahan
                        </p>
                    </tr>
                    <tr>
                        <p>Program Studi Pilihan</p>
                        <p>Pilihan 1</p>
                        <select name="pilihan_1" style="width: 300px; height: 25px;">
                            <option>-Pilih-</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                        <p>Alternatif 1</p>
                        <select name="alternatif_1" style="width: 300px; height: 25px;">
                            <option>-Pilih-</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                        <p>Alternatif 2</p>
                        <select name="alternatif_2" style="width: 300px; height: 25px;">
                            <option>-Pilih-</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                        </select>
                    </tr>
                    <tr>
                        <p>
                            <button type="submit" name="kirim" style="width: 70px; height: 30px;">Kirim</button>
                            <button type="reset" name="reset" style="width: 70px; height: 30px;">Batal</button>
                        </p>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>