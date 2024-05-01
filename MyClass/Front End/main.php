<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="x-icon" href="../pict/Logo.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>MyClass</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header id="navscroll">
    <div class="logo">
      <h1 class="my">My</h1>
      <h1 class="class">Class</h1>
    </div>
    <ul class="navbar">
      <li><a class="navlist" href="#home">Home</a></li>
      <li><a class="navlist" href="#edit">Edit Data</a></li>
      <li><a class="navlist" href="#read">Daftar Mahasiswa</a></li>
    </ul>
  </header>

  <div class="container">
    <div id="home" class="jumbotron">
      <div class="isi">
        <div class="kiri">
          <h1>Selamat Datang di MyClass!</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit debitis reprehenderit architecto, obcaecati ducimus nam similique incidunt aliquam tenetur explicabo tempore assumenda iusto quia illum a rerum saepe veritatis
            aspernatur maiores et eveniet laborum consequatur expedita. Molestiae fuga explicabo nulla animi. Vero quidem eaque ex consequuntur dignissimos veniam facere similique maiores molestias a at libero id, doloremque rerum
            dolores. Expedita dignissimos, deleniti eveniet amet, ducimus similique itaque accusantium distinctio voluptate non quam quis praesentium explicabo ex ipsum omnis porro soluta, impedit molestiae. Nemo, voluptate? Optio, vel?
            Modi, unde. Illum voluptatibus molestias aperiam soluta sit quos. Cum sint blanditiis quo cumque.
          </p>
        </div>
        <div class="kanan">
          <img src="../pict/illustrasi.png" alt="" />
        </div>
      </div>
    </div>

    <div id="edit" class="jumbotron">
      <div class="isi">
        <div class="slide-control">
          <input type="radio" name="slide" id="insert" checked />
          <input type="radio" name="slide" id="update" />
          <input type="radio" name="slide" id="delete" />
          <label for="insert" class="slide insert">Memasukkan Data</label>
          <label for="update" class="slide update">Memperbarui Data</label>
          <label for="delete" class="slide delete">Menghapus Data</label>
          <div class="slider-tab"></div>
        </div>
        <div class="pilihan">

          <!-- INSERT -->
          <form id="insertForm" class="insert">
            <div class="content">
              <input type="hidden" name="action" value="create" />
              <div class="form-group">
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" required />
              </div>
              <div class="form-group">
                <label for="nrp">NRP: </label>
                <input type="number" name="nrp" placeholder="ex : 3123600005" required />
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" required />
                <label class="radio" for="laki-laki">Laki-laki</label>
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required />
                <label class="radio" for="perempuan">Perempuan</label>
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan: </label>
                <select name="jurusan" required>
                  <option value="" disabled selected hidden style="color: rgb(169, 169, 169)">--Pilih Jurusan--</option>
                  <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                  <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                  <option value="D4 Sains Data Terapan">D4 Sains Data Terapan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="semester">Semester: </label>
                <select name="semester" required>
                  <option value="" disabled selected hidden style="color: rgb(169, 169, 169)">--Pilih Semester saat ini--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                </select>
              </div>
              <div class="form-group">
                <label for="kelas">Kelas: </label>
                <select name="kelas" required>
                  <option value="" disabled selected hidden style="color: rgb(169, 169, 169)">--Pilih Kelas--</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                </select>
              </div>
              <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="email" placeholder="example@it.student.pens.ac.id" />
              </div>
              <div class="form-group">
                <label for="alamat">Alamat: </label>
                <textarea name="alamat" placeholder="Alamat"></textarea>
              </div>
              <div class="form-group">
                <label for="no_hp">No HP: </label>
                <input type="number" name="no_hp" placeholder="08xxxxxxxxx" />
              </div>
              <div class="form-group">
                <label for="asal_sma">Asal SMA: </label>
                <input type="text" name="asal_sma" placeholder="ex : SMA Negeri 01 Kepahiang" />
              </div>
              <div class="button">
                <input type="submit" value="Tambahkan" />
                <input type="reset" />
              </div>
            </div>
          </form>

          <!-- UPDATE -->
          <form id="updateForm" class="update">
            <div class="content">
              <div class="form-group">
                <label for="nrp">NRP: </label>
                <input type="number" name="nrp" placeholder="Masukkan NRP yang datanya ingin diubah" required />
              </div>
              <div class="form-group">
                <label for="kolom">Kolom: </label>
                <select name="kolom" required>
                  <option value="nama">Nama</option>
                  <option value="nrp">NRP</option>
                  <option value="jenis_kelamin">Jenis Kelamin</option>
                  <option value="jurusan">Jurusan</option>
                  <option value="semester">Semester</option>
                  <option value="kelas">Kelas</option>
                  <option value="email">Email</option>
                  <option value="alamat">Alamat</option>
                  <option value="no_hp">No HP</option>
                  <option value="asal_sma">Asal SMA</option>
                </select>
              </div>
              <div class="form-group">
                <label for="value">Value: </label>
                <input type="text" name="value" placeholder="Masukkan Data yang baru" required />
              </div>
              <div class="button">
                <input type="submit" name="proses" value="Perbarui" />
                <input type="reset" />
              </div>
            </div>
          </form>

          <!-- DELETE -->
          <form id="deleteForm" class="delete">
            <div class="content">
              <div class="form-group">
                <label for="nrp">NRP: </label>
                <input type="number" name="nrp" placeholder="Masukkan NRP yang datanya ingin dihapus" required />
              </div>
              <div class="button">
                <div class="check">
                  <input type="checkbox" id="verifikasi" name="verifikasi" required />
                  <label class="radio" for="verifikasi">Yakin ingin menghapus data?</label>
                </div>
                <input type="submit" name="proses" value="Hapus" />
                <input type="reset" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- READ -->
    <div id="read" class="jumbotron">
      <div class="isi">
        <div class="tampilan">
          <h1>Daftar Mahasiswa</h1>
          <div class="sorter">
            <form id="readForm" class="read">
              <div class="form-group">
                <select id="sorterJurusan" name="jurusan" required>
                  <option value="semua">Semua</option>
                  <option value="D4 Teknik Informatika">D4 Teknik Informatika</option>
                  <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                  <option value="D4 Sains Data Terapan">D4 Sains Data Terapan</option>
                </select>
                Jurusan
              </div>
              <div class="form-group">
                <select id="sorterSemester" name="semester" required>
                  <option value="semua">Semua</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                </select>
                Semester
              </div>
              <div class="form-group">
                <select id="sorterKelas" name="kelas" required>
                  <option value="semua">Semua</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                </select>
                Kelas
              </div>
            </form>
          </div>
          <div class="scrollable-table">
            <table>
              <thead>
                <tr>
                  <td>No</td>
                  <td class="nrp">NRP</td>
                  <td class="nama">Nama</td>
                  <td>Jenis Kelamin</td>
                  <td class="jurusan">Jurusan</td>
                  <td>Semester</td>
                  <td>Kelas</td>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../Back End/koneksi.php';

                $sql = "SELECT nrp, nama, jenis_kelamin, jurusan, semester, kelas FROM mahasiswa";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  $no = 1;
                  while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='mid'>" . $no++ . "</td>";
                    echo "<td class='mid'>" . $row['nrp'] . "</td>";
                    echo "<td><a href='../Back End/popup.php?nrp=" . $row['nrp'] . "' class='popup'>" . $row['nama'] . "</a></td>";
                    echo "<td>" . $row['jenis_kelamin'] . "</td>";
                    echo "<td>" . $row['jurusan'] . "</td>";
                    echo "<td class='mid'>" . $row['semester'] . "</td>";
                    echo "<td class='mid'>" . $row['kelas'] . "</td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='7'>No records found</td></tr>";
                }

                $conn->close();
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="response"></div>
  <div id="darkBackground" class="dark-bg"></div>
  <div id="popup">
    <button class="close-popup">X</button>
  </div>

  <footer>
    <div class="footer-content">
      <div class="footer-logo">
        <h1 class="my">My</h1>
        <h1 class="class">Class</h1>
      </div>
      <div class="footer-columns">
        <div class="footer-col">
          <h3>Usefull Links</h3>
          <ul class="footer-row">
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Privacy Policy</a></li>
            <li><a href="">Terms & Conditions</a></li>
            <li><a href="">Blog</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h3>Follow Me</h3>
          <ul class="footer-row">
            <li>
              <a href="https://www.facebook.com/ivan.rahmatprakasa.7"> <i class="fa-brands fa-facebook"></i> Facebook</a>
            </li>
            <li>
              <a href="https://www.instagram.com/ivanrhmt_/"><i class="fa-brands fa-instagram"></i> Instagram</a>
            </li>
            <li>
              <a href="https://twitter.com/ivanrhmt_"><i class="fa-brands fa-twitter"></i> Twitter</a>
            </li>
            <li>
              <a href="https://www.tiktok.com/@ivanrahmatprakasa"><i class="fa-brands fa-tiktok"></i> Tiktok</a>
            </li>
          </ul>
        </div>
        <div class="footer-col2">
          <h3>Address</h3>
          <ul class="footer-row">
            <li>
              <i class="fa-solid fa-location-dot"></i>
              <p>Institut Teknologi Sepuluh Nopember, Kampus Jl. Raya ITS, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60111</p>
            </li>
            <li>
              <i class="fa-solid fa-building"></i>
              <p>Politeknik Elektronika Negeri Surabaya</p>
            </li>
            <li>
              <i class="fa-solid fa-envelope"></i>
              <p>ivanrahmat.p77@gmail.com</p>
            </li>
            <li>
              <i class="fa-solid fa-phone"></i>
              <p>+62 831-8714-4476</p>
            </li>
          </ul>
        </div>
      </div>
      <div class="footer-copy">
        <p>©2024 Copyright Ivan Rahmat Prakasa</p>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>

</html>