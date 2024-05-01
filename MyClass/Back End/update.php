<?php
include 'koneksi.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nrp = $_POST['nrp'];
    $kolom = $_POST['kolom'];
    $value = $_POST['value'];

    $sql = "UPDATE mahasiswa SET $kolom=? WHERE nrp=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $value, $nrp);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil diubah']);
    } elseif ($stmt->affected_rows == 0) {
        echo json_encode(['status' => 'error', 'message' => 'NRP tidak ditemukan, Data gagal diubah']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Data gagal ditambahkan: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
