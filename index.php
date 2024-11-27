<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>

<body>
    <h1>Belajar PHP Dasar</h1>

    <?php 
        echo "Hello World"; 
    ?>

    <!-- Variable PHP -->
    <h1>Variable PHP</h1>
    <?php 
        $nim = "0411500400"; 
        $nama = 'Abdullah'; 
        echo "NIM : " . $nim . "<br>"; 
        echo "Nama : $nama"; 
    ?>

    <!-- Menampilkan pesan selamat datang dengan nama dari URL -->
    <h1>Predefined Variable $_GET</h1>
    <?php 
        if (isset($_GET['nama'])) {
            echo "<p>Selamat Datang, " . htmlspecialchars($_GET['nama']) . "!</p>"; 
        } else {
            echo "<p>selamat datang muhammad rizky efendi.</p>";
        }
    ?>
</body>

</html>
