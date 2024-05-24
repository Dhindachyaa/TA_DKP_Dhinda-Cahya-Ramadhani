<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Stores</title>
    <link rel="stylesheet" href="home.css">
    <style>
        header {
            text-align: center; 
        }

        body {
            background-color: rgb(148 133 133 / 18%); 
        }
    
        .store {
            margin-bottom: 30px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow-y: auto; 
            transition: transform 0.3s ease; 
        }        

        .store:hover {
            transform: translateY(-5px); 
        }
        .store img {
            border-radius: 8px;
            margin-bottom: 10px; 
            max-width: 200px; /* Atur lebar maksimal */
            max-height: 150px; /* Atur tinggi maksimal */
        }
        .store-details {
            text-align: center;
            background-color: #ece4e4aa;
            border-radius: 10px;
            max-width: 700px;
        }
        .map-container {
            width: 100%;
            height: 150px; /* Atur tinggi peta */
            border-radius: 8px;
            overflow: hidden; /* Sembunyikan bagian peta yang berlebihan */
            margin-top: 10px; /* Beri jarak antara detail toko dan peta */
        }
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
    
        /* Background color for each store */
        .jakarta {
            background-image: url('https://i.pinimg.com/564x/9b/5f/d8/9b5fd8ad016ffd4ec99fc95383b685ba.jpg');
            max-width: 900px;
            margin: 0 auto;
            margin-bottom: 50px;
            transition: background-image 0.3s ease;

        }
        .semarang {
            background-image: url('https://i.pinimg.com/564x/6a/d7/f0/6ad7f04c47d0e1597cdb56c77eac36c7.jpg');
            max-width: 900px;
            margin: 0 auto;
            margin-bottom: 50px;
            transition: background-image 0.3s ease;
            
        }
        .bandung {
            background-image: url('https://i.pinimg.com/564x/e5/90/a7/e590a777098e435858d257c2e46b5601.jpg');
            max-width: 900px;
            margin: 0 auto;
            margin-bottom: 50px;
            transition: background-image 0.3s ease;
        }
    </style>
</head>
<body>
    <header>
        <h1>Lokasi Toko Kami</h1>
    </header>
</div>
    <div class="container">
        <div class="store jakarta">
            <img src="https://i.pinimg.com/564x/24/a8/ad/24a8add77faac3a424c7b5bdcc1899aa.jpg" alt="Jakarta Store">
            <div class="store-details">
                <h2>Jakarta Store</h2>
                <p>Jl. Sudirman No. 123, Jakarta</p>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0326509722764!2d106.80499561476932!3d-6.2089909955009685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1645577e85d%3A0xd00c2f17c4d9e133!2sJl.%20Jend.%20Sudirman%2C%20RT.10%2FRW.11%2C%20Karet%20Tengsin%2C%20Tanah%20Abang%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sen!2sid!4v1622477491667!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <!-- Penambahan alamat dan peta untuk toko Semarang dan Bandung -->
        <div class="store semarang">
            <img src="https://i.pinimg.com/564x/48/30/e1/4830e18ad4a6896f18bbb252ffbcad8d.jpg" alt="Semarang Store">
            <div class="store-details">
                <h2>Semarang Store</h2>
                <p>Jl. Pahlawan No. 45, Semarang</p>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.8967681295708!2d110.4219539709603!3d-6.983585765956224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e71f745d780a77d%3A0xd6249ccfba8c42c2!2sJl.%20Pahlawan%2C%20Pedurungan%2C%20Kec.%20Pedurungan%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050273!5e0!3m2!1sen!2sid!4v1622477897878!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <div class="store bandung">
            <img src="https://i.pinimg.com/564x/22/18/ae/2218ae4c27d2ff07b8eb00f1566b75a1.jpg" alt="Bandung Store">
            <div class="store-details">
                <h2>Bandung Store</h2>
                <p>Jl. Asia Afrika No. 67, Bandung</p>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.4890376719835!2d107.61867231477674!3d-6.922186595000407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f65e801e669d%3A0x16ff0b04f9d0b43f!2sJl.%20Asia%20Afrika%2C%20Braga%2C%20Kec.%20Sumur%20Bandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1622478180657!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
