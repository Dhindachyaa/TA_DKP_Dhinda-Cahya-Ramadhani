<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dengan Tautan Kontak</title>
    <!-- Gaya CSS untuk navbar -->
    <style>
        .navbar {
            background-color: #333;
            overflow: hidden;
            transition: background-color 0.3s;
            position: fixed;
            width: 100%;
            top: 0;
            display: flex;
            justify-content: center; /* Mengatur tautan menjadi berada di tengah secara horizontal */
}

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Animasi untuk judul dan gambar */
        h2, img {
            transition: transform 0.3s;
        }

        h2:hover, img:hover {
            transform: scale(1.1);
        }

        /* Animasi untuk konten halaman saat digulir */
        .content {
            padding: 20px;
            margin-top: 60px; /* Sesuaikan dengan tinggi navbar */
            background-color: #ddd;
            transition: margin-top 0.3s;
            text-align: center;
}
        

        /* Efek hover untuk konten */
        .content:hover {
            margin-top: 50px; /* Mengurangi margin saat dihover */
        }
    </style>
</head>
<body>

<?php
// Fungsi untuk membuat tautan Instagram
function generateInstagramLink($username) {
    return "https://www.instagram.com/".$username;
}

// Fungsi untuk membuat tautan WhatsApp
function generateWhatsAppLink($number, $message) {
    return "https://api.whatsapp.com/send?phone=".$number."&text=".urlencode($message);
}

// Data pengguna
$instagram_username = "dndchyaa_";
$whatsapp_number = "+6285876614915"; // Ganti dengan nomor WhatsApp Anda
$whatsapp_message = "Halo! Saya tertarik dengan layanan Anda.";

// Menyiapkan tautan Instagram dan WhatsApp
$instagram_url = generateInstagramLink($instagram_username);
$whatsapp_url = generateWhatsAppLink($whatsapp_number, $whatsapp_message);

// Menyiapkan tautan navbar dalam sebuah array
$navbar_links = array(
    "Instagram" => $instagram_url,
    "WhatsApp" => $whatsapp_url
);
?>

<div class="navbar">
    <?php
    // Menggunakan perulangan untuk menampilkan tautan navbar
    foreach ($navbar_links as $label => $url) {
        echo '<a href="'.$url.'" target="_blank">'.$label.'</a>';
    }
    ?>
</div>
<!-- Konten Halaman -->
<div class="content">
    <h2>Contact Us for more information</h2>
    <p>Click WhatsApp or Instagram on Navbar.</p>
    <!-- Tambahkan gambar dengan menggunakan URL -->
    <img src="https://i.pinimg.com/564x/13/5c/5e/135c5e79a6d7d00fc103a68ddb29a516.jpg" alt="Gambar Contact Us" style="width: 300px;">
</div>

</body>
</html>
