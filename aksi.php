<?php
$nim = $_POST['nim'];
$nama = $_POST['name'];
$gender = $_POST['jenis_kelamin'];
$status = $_POST['status'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
?>

<html>

<head>
    <title> Tabel Biodata </title>
</head>

<table border="1" cellpadding="7" width>
    <thead>
        <tr>
            <th colspan="7">Tabel Biodata</th>
        </tr>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Status</th>
            <th>No HP</th>
            <th>Alamat</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td><?= $nim; ?></td>
            <td><?= $nama; ?></td>
            <td><?= $gender; ?></td>
            <td><?= $status; ?></td>

            <td> <?= $no_hp; ?></td>
            <td> <?= $alamat; ?> </td>
        </tr>


    </tbody>
</table>
<br>
<p>Nim yang Anda Masukan Adalah <b><?= $nim; ?></b></p>
<p>Nama yang Anda Masukan Adalah <b><?= $nama; ?></b></p>
<p>Gender yang Anda Masukan Adalah <b><?= $gender; ?></b></p>
<p>Status yang Anda Masukan Adalah <b><?= $status; ?></b></p>
<p>Nomor HP yang Anda Masukan Adalah <b><?= $no_hp; ?></b></p>
<p>Alamat yang Anda Masukan Adalah <b><?= $alamat; ?></b></p>