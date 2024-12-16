<?php
// Sesuaikan dengan setting MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "responsi";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM wisata";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>DISCOVERKU</title>
    <!-- Tab browser icon -->
  <link rel="icon" type="image/x-icon" href="assets/img/logo/HV.png" />

<!-- <link rel="stylesheet" href="style.css" /> -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Optional custom styles */
        /* Adjust as needed */
        .table-container {
            margin: 20px;
        }
        body {
            background-image: url('assets/css/images/pinusWP.jpg'); /* Ganti 'background.jpg' dengan path gambar latar belakang yang diinginkan */
            background-size: cover;
            color: #000;
        }

        .navbar {
            background-color: #0095ff;
        }

        .table-container {
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang tabel */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Efek bayangan pada tabel */
        }

        .table th,
        .table td {
            color: #000; /* Warna teks hitam */
        }
    </style>
</head>

<body>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!-- Data yang dapat diakses pengguna -->
// Data Marker untuk wilayah Kulon Progo
    var markerData = [
      [-7.911483158949521, 110.06484833708399, "Pantai Glagah", "assets/css/IMAGE/Glagah.jpg"],
      [-7.819732826812293, 110.12125602224128, "Waduk Sermo", "assets/css/IMAGE/WadukSermo.jpg"],
      [-7.866209897987584, 110.16952284192352, "Ayam Goren Bu Hartin", "assets/css/IMAGE/Ayam Goreng Bu Hartin.jpg"],
      [-7.858720111445577, 110.14939078002678, "Dapur Semar", "assets/css/IMAGE/Dapur Semar.jpg"],
      [-7.745528420887003, 110.20605941071221, "Geblek Pari", "assets/css/IMAGE/Geblek Pari.jpg"],
      [-7.886997773361795, 110.18676695489306, "Goa Kebon", "assets/css/IMAGE/Goa Kebon.jpg"],
      [-7.746966204951053, 110.13143976653308, "Goa Kiskendo", "assets/css/IMAGE/Goa Kiskendo.jpg"],
      [-7.806966852081933, 110.12922661725564, "Kalibiru", "assets/css/IMAGE/KaliBiru.jpg"],
      [-7.646212605177133, 110.14390228608647, "Kebun Teh Nglinggo", "assets/css/IMAGE/Kebun Teh Nglinggo.jpg"],
      [-7.769817406899608, 110.1211136107125, "Kedung Pedut", "assets/css/IMAGE/kedung-pedhutsmalljpg.jpg"],
      [-7.766286896739272, 110.11756149536915, "Air Terjun Kembang Soka", "assets/css/IMAGE/Kembang Soka.jpg"],
      [-7.86014301180851, 110.17421842605685, "Mie Ayam Pakde Wonogiri", "assets/css/IMAGE/Mie Ayam Pakde Wonogiri.jpg"],
      [-7.857776289817122, 110.14871582605696, "Pondok Makan Omah Mbeiji", "assets/ss/IMAGE/Pondok Makan Omah Mbeji.jpg"],
      [-7.644873522938979, 110.1458731316073, "Tumpeng Menoreh", "assets/css/IMAGE/Tumpeng Menoreh.jpg"],
      [-7.903330389046623, 110.05791265107344, "Yogyakarta International Airport", "assets/css/IMAGE/Tumpeng Menoreh.jpg"],
    ];
<?php
$conn->close();
?>