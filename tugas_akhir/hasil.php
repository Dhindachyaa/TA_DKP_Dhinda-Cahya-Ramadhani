<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Servis iPhone</title>
    <link rel="stylesheet" href="css/hasil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    </header>
    <div class="container bg-color animate__animated animate__fadeInDown">
            <h2 class="container-header text-center"> Pendaftaran Berhasil!! <br> </h2>
            <br>
            
            <div class="info-container">
    <h3 class="info-title">Detail Pendaftaran:</h3>
    <div class="detail-pendaftaran">

    
    <?php
    class Pendaftaran {
        private $tanggalkunjungan;
        private $nama;
        private $telepon;
        private $email;
        private $jenisIphone;
        private $catatan;

        // Constructor
        public function __construct($tanggalkunjungan, $nama, $telepon, $email, $jenisIphone, $catatan) {
            $this->tanggalkunjungan = $tanggalkunjungan;
            $this->nama = $nama;
            $this->telepon = $telepon;
            $this->email = $email;
            $this->jenisIphone = $jenisIphone;
            $this->catatan = $catatan;
        }

        // Getter dan setter
        public function getTanggalkunjungan() {
            return $this->tanggalkunjungan;
        }

        public function setTanggalkunjungan($tanggalkunjungan) {
            $this->tanggalkunjungan = $tanggalkunjungan;
        }

        public function getNama() {
            return $this->nama;
        }

        public function setNama($nama) {
            $this->nama = $nama;
        }

        public function getTelepon() {
            return $this->telepon;
        }

        public function setTelepon($telepon) {
            $this->telepon = $telepon;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getJenisIphone() {
            return $this->jenisIphone;
        }

        public function setJenisIphone($jenisIphone) {
            $this->jenisIphone = $jenisIphone;
        }

        public function getCatatan() {
            return $this->catatan;
        }

        public function setCatatan($catatan) {
            $this->catatan = $catatan;
        }

        // Metode untuk menampilkan informasi pendaftaran
        public function displayInfo() {
            echo "<div class='info-container'>";
            echo "<table class='info-table'>";
            echo "<tr><td><strong>Tanggal Kunjungan:</strong></td><td>" . $this->tanggalkunjungan . "</td></tr>";
            echo "<tr><td><strong>Nama:</strong></td><td>" . $this->nama . "</td></tr>";
            echo "<tr><td><strong>No. Telepon:</strong></td><td>" . $this->telepon . "</td></tr>";
            echo "<tr><td><strong>Email:</strong></td><td>" . $this->email . "</td></tr>";
            echo "<tr><td><strong>Jenis iPhone:</strong></td><td>" . $this->jenisIphone . "</td></tr>";
            echo "<tr><td><strong>Catatan:</strong></td><td>" . $this->catatan . "</td></tr>";
            echo "</table>";
            echo "</div>";
        }
    }
 // Membuat objek pendaftaran dengan data dari form
 $pendaftaran = new Pendaftaran($_POST['tanggalkunjungan'], $_POST['nama'], $_POST['telepon'], $_POST['email'], $_POST['ji'], $_POST['catatan']);

     // Tampilkan informasi pendaftaran
     $pendaftaran->displayInfo();

     // Mulai sesi
     session_start();
     
     // Jika sesi nomor antrian belum diatur, inisialisasi dengan 0
     if (!isset($_SESSION['nomor_antrian'])) {
         $_SESSION['nomor_antrian'] = 0;
     } else {
         // Jika sesi nomor antrian telah diatur sebelumnya, namun mencapai 500, kembalikan ke 0
         if ($_SESSION['nomor_antrian'] >= 500) {
             $_SESSION['nomor_antrian'] = 0;
         }
     }
     
     // Tingkatkan nomor antrian dan simpan dalam sesi
     $_SESSION['nomor_antrian']++;
     $nomor_antrian = str_pad($_SESSION['nomor_antrian'], 3, '0', STR_PAD_LEFT); // Format nomor antrian menjadi tiga digit
     
     // Tampilkan nomor antrian
     echo "<div class='info-container'>";
     echo "<table class='info-table'>";
     echo "<tr><td><strong>Nomor Antrian:</strong></td><td>" . $nomor_antrian . "</td></tr>";
     echo "</table>";
     echo "</div>";
     
     ?>
     <div class="text-center">
         <a href="antrian.php" class="btn btn-primary">Pantau Antrian</a>
     </div>
 </div>
</div>
</body>
</html>
     