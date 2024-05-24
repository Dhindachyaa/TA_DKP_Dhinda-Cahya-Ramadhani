<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantau Antrian</title>
    <link rel="stylesheet" href="css/pantau.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <h2 class="text-center">Pantau Antrian</h2>

    </header>
    <div class="wrapper">
        <div class="container bg-color">
            <h2 class="container-header text-center">Informasi Antrian</h2><br>

            <?php
            session_start();

            // Tampilkan nomor antrian yang sedang dilayani
            echo "<div class='info-container'>";
            echo "<table class='info-table'>";
            echo "<tr><td><strong>Antrian Sedang Dilayani:</strong></td><td>" . $_SESSION['nomor_antrian'] . "</td></tr>";
            echo "</table>";
            echo "</div>";

            // Tampilkan nomor antrian berikutnya
            $nomor_antrian_berikutnya = $_SESSION['nomor_antrian'] + 1;
            echo "<div class='info-container'>";
            echo "<table class='info-table'>";
            echo "<tr><td><strong>Nomor Antrian Berikutnya:</strong></td><td>" . str_pad($nomor_antrian_berikutnya, 3, '0', STR_PAD_LEFT) . "</td></tr>";
            echo "</table>";
            echo "</div>";
            ?>

            <div class="text-center">
                <a href="index.php" class="btn btn-primary">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</body>
</html>

