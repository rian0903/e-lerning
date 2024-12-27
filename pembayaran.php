<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .payment-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .payment-details {
            margin-bottom: 20px;
        }
        .payment-details p {
            margin: 10px 0;
            font-size: 16px;
        }
        .upload-section {
            margin-bottom: 20px;
        }
        .upload-section label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .upload-section input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .notification {
            display: none;
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h2>Pembayaran Kursus</h2>
        <div class="payment-details">
            <p>Silakan transfer ke nomor rekening berikut:</p>
            <p><strong>Bank BCA: 123-456-789</strong></p>
            <p>Atas Nama: <strong>Kursus Online</strong></p>
        </div>
        <div class="upload-section">
            <label for="proof">Unggah Bukti Pembayaran</label>
            <input type="file" id="proof" name="proof" accept="image/*">
        </div>
        <button class="btn" onclick="submitPayment()">Kirim</button>
        <div class="notification" id="notification">
            Bukti pembayaran berhasil dikirim! Terima kasih.
        </div>
    </div>

    <script>
        function submitPayment() {
            const fileInput = document.getElementById('proof');
            if (fileInput.files.length > 0) {
                const notification = document.getElementById('notification');
                notification.style.display = 'block';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 3000); 
            } else {
                alert('Harap unggah bukti pembayaran terlebih dahulu.');
            }
        }
    </script>
</body>
</html>
