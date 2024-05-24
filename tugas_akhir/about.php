<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Stores</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://i.pinimg.com/originals/52/62/a1/5262a1da45fec7922430ad340b48f6c4.jpg'); 
            margin: 0;
            padding: 0;
        }
        header {
            background-color:rgb(187 192 196 / 90%);;
            color: #ffffffe9;
            text-align: center;
            padding: 8px 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .section {
            background-color: #ffffffd4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }
        p {
            color: #666;
            line-height: 1.6;
        }
        /* Animasi */
        .fade-in {
            animation: fadeIn 1s ease-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Tentang Kami</h1>
    </header>
    <div class="container fade-in">
        <div class="section">
            <h2>Sejarah iPhone.id Service Semarang</h2>
            <p>iPhone.id adalah perusahaan yang bergerak di bidang jasa perbaikan produk-produk Apple dibawah naungan PT Apple.id Service Indonesia. Apple.id Service merekrut teknisi-teknisi yang berpengalaman, Apple.id Service melayani jasa service Apple terlengkap di seluruh Indonesia.</p>
        </div>
       
        <div class="section">
            <h2>VISI</h2>
            <p>Di tengah kesibukan yang meningkat, iPhone.id Service menjadi solusi utama bagi para pengguna Apple untuk menghemat waktu serta tenaga dengan sistem door to door service, dimana mereka tidak perlu mencari jasa perbaikan ketika terjadi masalah.</p>
        </div>

        <div class="section">
            <h2>MISI</h2>
            <p>Menjadi pilihan pengguna Apple untuk memperbaiki devicenya dengan harga terjangkau untuk semua kalangan, serta memberikan servis professional dengan spare part berkualitas original.</p>
        </div>
    </div>
</body>
</html>
