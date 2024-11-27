<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>PHP Dasar</title> 
</head> 
<body> 
    <!-- Form Input -->
    <h2>Form Input</h2> 
    <form method="post"> 
        <label>Nama: </label> 
        <input type="text" name="nama"> 
        <input type="submit" value="Kirim"> 
    </form> 
    <?php 
        if (isset($_POST['nama'])) {
            echo 'Selamat Datang ' . htmlspecialchars($_POST['nama']); 
        }
    ?> 

    <!-- Operator -->
    <?php 
        $gaji = 1000000; 
        $pajak = 0.1; 
        $thp = $gaji - ($gaji * $pajak); 
        echo "<h2>Operator</h2>";
        echo "Gaji sebelum pajak = Rp. $gaji <br>"; 
        echo "Gaji yang dibawa pulang = Rp. $thp <br><br>"; 
    ?>

    <!-- Kondisi IF -->
    <?php 
        echo "<h2>Kondisi IF</h2>";
        $nama_hari = date("l"); 
        if ($nama_hari == "Sunday") { 
            echo "Minggu"; 
        } elseif ($nama_hari == "Monday") { 
            echo "Senin"; 
        } else { 
            echo "Selasa"; 
        } 
        echo "<br><br>";
    ?>

    <!-- Kondisi Switch -->
    <?php 
        echo "<h2>Kondisi Switch</h2>";
        $nama_hari = date("l"); 
        switch ($nama_hari) { 
            case "Sunday": 
                echo "Minggu"; 
                break; 
            case "Monday": 
                echo "Senin"; 
                break; 
            case "Tuesday": 
                echo "Selasa"; 
                break; 
            default: 
                echo "Sabtu"; 
        } 
        echo "<br><br>";
    ?>

    <!-- Perulangan for -->
    <?php 
        echo "<h2>Perulangan for</h2>";
        echo "Perulangan 1 sampai 10 <br />"; 
        for ($i = 1; $i <= 10; $i++) { 
            echo "Perulangan ke: " . $i . '<br />'; 
        } 

        echo "Perulangan Menurun dari 10 ke 1 <br />"; 
        for ($i = 10; $i >= 1; $i--) { 
            echo "Perulangan ke: " . $i . '<br />'; 
        } 
        echo "<br>";
    ?>

    <!-- Perulangan while -->
    <?php 
        echo "<h2>Perulangan while</h2>";
        echo "Perulangan 1 sampai 10 <br />"; 
        $i = 1; 
        while ($i <= 10) { 
            echo "Perulangan ke: " . $i . '<br />'; 
            $i++; 
        } 
        echo "<br>";
    ?>

    <!-- Perulangan do-while -->
    <?php 
        echo "<h2>Perulangan do-while</h2>";
        echo "Perulangan 1 sampai 10 <br />"; 
        $i = 1; 
        do { 
            echo "Perulangan ke: " . $i . '<br />'; 
            $i++; 
        } while ($i <= 10); 
    ?>
</body> 
</html>
