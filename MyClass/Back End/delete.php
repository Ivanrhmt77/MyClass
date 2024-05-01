<?php
include 'koneksi.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nrp = $_POST['nrp'] ?? '';

    if (empty($nrp)) {
        echo json_encode(['status' => 'error', 'message' => 'NRP is required']);
        exit;
    }

    $sql = "DELETE FROM mahasiswa WHERE nrp=?";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        echo json_encode(['status' => 'error', 'message' => 'SQL error: ' . $conn->error]);
        exit;
    }
    $stmt->bind_param("s", $nrp);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(['status' => 'success', 'message' => 'Data berhasil dihapus']);
    } elseif ($stmt->affected_rows == 0) {
        echo json_encode(['status' => 'error', 'message' => 'NRP tidak ditemukan, Data gagal dihapus']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Data gagal ditambahkan: ' . $stmt->error]);
    }

    $stmt->close();
    $conn->close();
}
