<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Servis iPhone</title>
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
         <h2 class="text-center">
                Pendaftaran Servis Iphone
            </h2>
          </header>

    <div class="wrapper">
        <div class="container bg-color">
            <h2 class="container-header text-center"> iPhone.id Service Semarang </h2><br><br>
    
            <form action="hasil.php" method="post" onsubmit="return validateForm()">
                <div class="form-group form-book">
                    <label for="tanggalkunjungan">Tanggal Kunjungan:</label><br>
                    <input type="date" id="tanggalkunjungan" name="tanggalkunjungan" required><br><br>
                </div>
                <div class="form-group form-book">
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group form-book">
                    <label for="telepon">No.Telepon</label><br>
                    <input type="text" id="telepon" name="telepon" required>
                    <br>
                </div>
                <div class="form-group form-book">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" required>
                    <br>
                </div>
                <div class="form-group form-book">
                    <label for="ji">Jenis iPhone</label>
                    <select class="form-select" aria-label="Default select example" name="ji" id="ji">
                    <option selected>Pilih Jenis iPhone</option>
                    <option value="iPhone 6">iPhone 6</option> 
                    <option value="iPhone 6 plus">iPhone 6 plus</option> 
                    <option value="iPhone 6s">iPhone 6s</option> 
                    <option value="iPhone 7">iPhone 7</option> 
                    <option value="iPhone 7 plus">iPhone 7 plus</option>
                    <option value="iPhone 8">iPhone 8</option>  
                    <option value="iPhone 8 plus">iPhone 8 plus</option> 
                    <option value="iPhone X">iPhone X</option>
                    <option value="iPhone XR">iPhone XR</option>
                    <option value="iPhone XS">iPhone XS</option>
                    <option value="iPhone XS Max">iPhone XS Max</option>
                    <option value="iPhone 11">iPhone 11</option>
                    <option value="iPhone 11 Pro">iPhone 11 Pro</option>
                    <option value="iPhone 11 Pro Max">iPhone 11 Pro Max</option>
                    <option value="iPhone 12">iPhone 12</option>
                    <option value="iPhone 12 Mini">iPhone 12 Mini</option>
                    <option value="iPhone 12 Pro">iPhone 12 Pro</option>
                    <option value="iPhone 12 Pro Max">iPhone 12 Pro Max</option>
                    <option value="iPhone 13">iPhone 13</option>
                    <option value="iPhone 13 Mini">iPhone 13 Mini</option>
                    <option value="iPhone 13 Pro">iPhone 13 Pro</option>
                    <option value="iPhone 13 Pro Max">iPhone 13 Pro Max</option>
                    <option value="iPhone 14">iPhone 14</option>
                    <option value="iPhone 14 plus">iPhone 14 plus</option>
                    <option value="iPhone 14 Pro">iPhone 14 Pro</option>
                    <option value="iPhone 14 Pro Max">iPhone 14 Pro Max</option>
                    <option value="iPhone 15">iPhone 15</option>
                    <option value="iPhone 15 plus">iPhone 15 plus</option>
                    <option value="iPhone 15 Pro">iPhone 15 Pro</option>
                    <option value="iPhone 15 Pro Max">iPhone 15 Pro Max</option>
                    </select>
                </div>

                <div class="form-group form-book">
                    <label for="catatan">Catatan</label><br>
                    <textarea id="catatan" name="catatan"></textarea>
                    <br>
                </div>
                <input type="submit" value="Ambil Tiket">
            </form>
            <div id="failureMessage" style="display:none; color:red; margin-top:10px;">
                Pendaftaran gagal. Silahkan isi semua field!!
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var tanggalkunjungan = document.getElementById("tanggalkunjungan").value;
            var nama = document.getElementById("nama").value;
            var telepon = document.getElementById("telepon").value;
            var email = document.getElementById("email").value;
            var jenisiPhone = document.getElementById("ji").value;
            var catatan = document.getElementById("catatan").value;

            if (tanggalkunjungan === "" || nama === "" || telepon === "" || email === "" || jenisiPhone === "" || catatan === "") {
                document.getElementById("failureMessage").style.display = "block";
                return false;
            } else {
                return true;
            }
        }
    </script>
</body>
</html>
