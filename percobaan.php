<?php
include "php/koneksi"
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renungan Harian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background: #0066cc;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            padding: 20px;
        }
        .content img {
            max-width: 100%;
            height: auto;
        }
        .baca-section {
            margin-top: 20px;
        }
        .baca-title {
            font-weight: bold;
        }
        .baca-date {
            color: #666;
            font-size: 0.9em;
        }
        .baca-text {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>RENUNGAN HARIAN</h1>
    </div>
    <div class="content">
        <div class="baca-section">
            <h2 class="baca-title">Bacaan ALKITAB - Ingat Kepada Tuhan</h2>
            <div class="baca-date">Ulangan 8: 11-18</div>
            <img src="path_to_image.jpg" alt="Renungan Harian">
            <p class="baca-text">
                Ulangan 8:18 “Tetapi haruslah engkau ingat kepada TUHAN, Allahmu,
                sebab Dialah yang memberikan kepadamu kekuatan untuk memperoleh kekayaan,
                dengan maksud meneguhkan perjanjian yang diikr...
            </p>
            <p class="baca-date">BY ADMINISTRATOR • 03 MAR 2023</p>
        </div>
    </div>
</div>

</body>
</html>