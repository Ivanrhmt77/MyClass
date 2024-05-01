<?php
include 'koneksi.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $semester = $_POST['semester'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $asal_sma = $_POST['asal_sma'];

    $sql = "INSERT INTO mahasiswa (nrp, nama, jenis_kelamin, jurusan, semester, kelas, email, alamat, no_hp, asal_sma) 
    VALUES ('$nrp', '$nama', '$jenis_kelamin', '$jurusan', '$semester', '$kelas', '$email', '$alamat', '$no_hp', '$asal_sma')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Data gagal ditambahkan: ' . $conn->error]);
    }

    $conn->close();
}
