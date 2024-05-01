<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyClass</title>
    <link rel="stylesheet" href="../Front End/style.css">
</head>

<body class="popup-bg">
    <div class="popup-container">
        <?php

        include 'koneksi.php';


        if (isset($_GET['nrp'])) {
            $nrp = $_GET['nrp'];

            $sql = "SELECT * FROM mahasiswa WHERE nrp = ?";


            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("i", $nrp);
                $stmt->execute();


                $result = $stmt->get_result();
                if ($result->num_rows == 1) {

                    $row = $result->fetch_assoc();
                    echo "<h1>Detail " . $row['nama'] . "</h1>";
                    echo "<div class='info'><p class='baris'>NRP</p><p class='titik2'>:</p><p> " . $row['nrp'] . "</p></div>";
                    echo "<div class='info'><p class='baris'>Nama</p><p class='titik2'>:</p><p> " . $row['nama'] . "</p></div>";
                    echo "<div class='info'><p class='baris'>Jenis Kelamin</p><p class='titik2'>:</p><p> " . $row['jenis_kelamin'] . "</p></div>";
                    echo "<div class='info'><p class='baris'>Jurusan</p><p class='titik2'>:</p><p> " . $row['jurusan'] . "</p></div>";
                    echo "<div class='info'><p class='baris'>Semester</p><p class='titik2'>:</p><p> " . $row['semester'] . "</p></div>";
                    echo "<div class='info'><p class='baris'>Kelas</p><p class='titik2'>:</p><p> " . $row['kelas'] . "</p></div>";
                    echo "<div class='info'><p class='baris'>Email</p><p class='titik2'>:</p><p> " . $row['email'] . "</p></div>";
                    echo "<div class='info'><p class='baris'>Alamat</p><p class='titik2'>:</p><p> " . $row['alamat'] . "</p></div>";
                    echo "<div class='info'><p class='baris'>No HP </p><p class='titik2'>:</p><p> " . $row['no_hp'] . "</p></div>";
                    echo "<div class='info'><p class='baris'>Asal SMA</p><p class='titik2'>:</p><p> " . $row['asal_sma'] . "</p></div>";
                } else {
                    echo "<p>No record found for the provided NRP.</p>";
                }
                $stmt->close();
            } else {
                echo "<p>Error preparing statement: " . $conn->error . "</p>";
            }
        } else {
            echo "<p>NRP is required.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>

</html>