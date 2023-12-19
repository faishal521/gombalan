<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gombalan Generator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #666;
        }

        input {
            font-size: 16px;
            padding: 8px;
        }

        button {
            font-size: 16px;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $gombalan = array(
            "Kamu seperti matahari bagiku, terang benderang dan selalu membuat {nama}ku bersinar.",
            "Jika cinta itu seperti angin, aku ingin menjadi badai yang tak kunjung reda.",
            "Ketika aku melihat {nama}, semua masalah terasa sepele dan hidup ini terasa lebih indah.",
            "Aku ingin menjadi penjaga hatimu, melindungimu seperti langit yang melindungi bumi.",
            "Cinta kita bagaikan bintang di langit, meski jarak memisahkan, kita tetap bersinar bersama.",
            "Tidak ada kata bijak yang bisa menggambarkan seindah dan sesempurna {nama}mu.",
            "Kamu adalah kunci dari misteri kebahagiaan dalam hidupku.",
        );

        $nama = isset($_POST['nama']) ? $_POST['nama'] : 'teman';
        $randomGombalan = str_replace('{nama}', $nama, $gombalan[array_rand($gombalan)]);
        echo "<p>{$randomGombalan}</p>";
        ?>

    </div>
</body>

</html>