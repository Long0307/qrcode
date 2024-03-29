<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo Mã QR Code</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wapper">
        <h1>Tạo Mã QR Code</h1>
        <input type="text" class="qr_text" id="qr_text" placeholder="Nhập text hoặc URL" />
    <label for="sizes">Lựa chọn kích thước</label>
    <select id="sizes">
        <option value="100">100x100</option>
        <option value="200">200x200</option>
        <option value="300">300x300</option>
        <option value="400">400x400</option>
        <option value="500">500x500</option>
        <option value="600">600x600</option>
        <option value="700">700x700</option>
        <option value="800">800x800</option>
        <option value="900">900x900</option>
        <option value="1000">1000x1000</option>
    </select>

    <div class="body-qr"></div>
    <div class="footer-qr">
        <a href="" id="generate">Tạo QR Code</a>
        <a href="" id="download" download="QR_Code.png">Tải về</a>
    </div>
</div>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</body>
</html>