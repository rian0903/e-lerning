<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kursus</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        .course-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .course-card {
            width: 30%;
            background: #fff;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }
        .course-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .course-card .info {
            padding: 15px;
        }
        .course-card .info h3 {
            margin: 10px 0;
        }
        .course-card .info p {
            color: #666;
            margin-bottom: 10px;
        }
        .course-card .details {
            display: none;
            background-color: #f7f7f7;
            padding: 10px;
            border-top: 1px solid #ddd;
        }
        .course-card:hover .details {
            display: block;
        }
        .details p {
            margin: 5px 0;
        }
        .details span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Pilihan Kursus</h1>
        <div class="course-list">
            <div class="course-card" onclick="window.location.href='pembayaran.php'">
                <img src="course1.jpg" alt="Kursus 1">
                <div class="info">
                    <h3>Pengenalan Internet of Things (IoT)</h3>
                    <p>Belajar untuk memahami Internet of Things (IoT) dari nol dengan mentor berpengalaman.</p>
                </div>
                <div class="details">
                    <p>Jumlah Peserta: <span>200+</span></p>
                    <p>Harga: <span>Rp 500.000</span></p>
                </div>
            </div>
            <div class="course-card" onclick="window.location.href='pembayaran.php'">
                <img src="course2.jpg" alt="Kursus 2">
                <div class="info">
                    <h3>Jaringan dan Keamanan</h3>
                    <p>Kuasi sistem Jaringan dan Keamanan untuk karier kreatif Anda.</p>
                </div>
                <div class="details">
                    <p>Jumlah Peserta: <span>150+</span></p>
                    <p>Harga: <span>Rp 400.000</span></p>
                </div>
            </div>
            <div class="course-card" onclick="window.location.href='pembayaran.php'">
                <img src="course3.jpg" alt="Kursus 3">
                <div class="info">
                    <h3>Pemrograman dan Pengembangan Aplikasi</h3>
                    <p>Belajar untuk memahami bahasa pemograman dengan mentor berpengalaman.</p>
                </div>
                <div class="details">
                    <p>Jumlah Peserta: <span>250+</span></p>
                    <p>Harga: <span>Rp 600.000</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
