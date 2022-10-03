<?php
//mengambil data dari form sebelumnya
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$tlahir = $_POST['tlahir'];
$date = $_POST['date'];
$jk = $_POST['jk'];
$alsaya = $_POST['alsaya'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$kota = $_POST['kota'];

$nkk = $_POST['nkk'];
$namabapak = $_POST['namabapak'];
$agamabapak = $_POST['agamabapak'];
$pekerjaanbapak = $_POST['pekerjaanbapak'];
$namamama = $_POST['namamama'];
$agamamama = $_POST['agamamama'];
$pekerjaanmama = $_POST['pekerjaanmama'];
$alortu = $_POST['alortu'];
?>

<!DOCTYPE html>
<head>
        <title> FORM PENDAFTARAN MAHASISWA BARU 2022 </tittle>
        <link rel="stylesheet" href="style1.css">
</head>
<body> 
        <div class="h3form"></div>
        <div class="tableform"></div>
        <h2 class="h2form">Formulir Pendaftaran Mahasiswa Baru 2022/2023</h2

<table class="tableform" align="center">
    <th><b>DATA MAHASISWA</b></th>
    <tr>
        <td>Nama lengkap</td>
        <td>:</td>
        <td><?php echo $nama;?></td>
    </tr>
    <tr>
        <td>NISN</td>
        <td>:</td>
        <td><?php echo $nisn;?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td>><?php echo $tlahir;?></td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <td>:<td>
        <td><?php echo $date;?></td>
    </tr>

    <tr>
        <td>Jenis Kelamin</td>
        <td>:<td>
        <td><?php echo $jk;?></td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>:<td>
        <td><?php echo $alsaya;?></td>
    </tr>

    <tr>
        <td>E-mail</td>
        <td>:<td>
        <td><?php echo $email;?></td>
    </tr>

    <tr>
        <td>No hp</td>
        <td>:</td>
        <td><?php echo $nohp;?></td>
    </tr>

    <tr>
    <td>Kota</td>
    <td>:<td>
    <td><?php echo $kota;?</td>
    </tr>

    <th><b>DATA ORANG TUA</b></th>
           <tr>
               <td>Nomor Kartu Keluarga</td>
               <td>:</td>
               <td><?php echo $nkk;?></td>
            </tr>
            <tr>
                <td>Nama Bapak Kandung</td>
                <td>:</td>
                <td><?php echo $namabapak;?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $agamabapak;?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>:</td>
                <td><?php echo $pekerjaanbapak;?></td>
            </tr>
            <tr>
                <td>Nama Mama Kandung</td>
                <td>:</td>
                <td><?php echo $agamamama;?></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $agamamama;?></td>
            </tr>
            <tr>
                <td>Pekerjaan</td.
                <td>:<td>
                <td><?php echo $pekerjaanmama;?</td>
            </tr>
                <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alourtu;?></td>
                </tr>
        </table>
    </form>
    </body>
    </html>





