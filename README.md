# -Lab7Web
# PHP Dasar 
Buat file baru dengan nama php_dasar.php pada directory tersebut. Kemudian buat 
kode seperti berikut. 
```
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<title>PHP Dasar</title> 
</head> 
<body> 
<h1>Belajar PHP Dasar</h1> 
<?php 
echo "Hello World"; 
?> 
</body> 
</html>
```
hasilnya
![image](https://github.com/user-attachments/assets/a526ad97-a275-4060-8814-9dbd418d8687)
# Variable PHP 
Menambahkan variable pada program. 
```
<?php 
$nim = "0411500400"; 
$nama = 'Abdullah'; 
echo "NIM : " . $nim . "<br>"; 
echo "Nama : $nama"; 
?>
```
hasilnya
![image](https://github.com/user-attachments/assets/0bddc9de-8a2d-41c4-958e-ec6d05103a8f)
# Predefine Variable $_GET 
```
<?php 
echo 'Selamat Datang ' . $_GET['nama']; 
?>
```
hasilnya
![image](https://github.com/user-attachments/assets/b2fbe8b5-b7e1-4440-9285-106f3b8510d5)

# Membuat Form Input 
codingan nya
```
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>PHP Dasar</title> 
</head> 
<body> 
    <h2>Form Input</h2> 
    <form method="post"> 
        <label>Nama: </label> 
        <input type="text" name="nama"> 
        <input type="submit" value="Kirim"> 
    </form> 
    <?php 
        echo 'Selamat Datang ' . $_POST['nama']; 
    ?> 
</body> 
</html>
```
hasilnya
![image](https://github.com/user-attachments/assets/138d2c52-3647-44da-be19-54c1716e57a5)

# Operator
codingan nya
```
<?php 
$gaji = 1000000; 
$pajak = 0.1; 
$thp = $gaji - ($gaji * $pajak); 
echo "Gaji sebelum pajak = Rp. $gaji <br>"; 
echo "Gaji yang dibawa pulang = Rp. $thp"; 
?>
```
hasilnya
![image](https://github.com/user-attachments/assets/10529f4e-b614-4706-ad8d-df45a303eff4)

# Kondisi IF
```
<?php 
$nama_hari = date("l"); 
if ($nama_hari == "Sunday") { 
    echo "Minggu"; 
} elseif ($nama_hari == "Monday") { 
    echo "Senin"; 
} else { 
    echo "Selasa"; 
} 
?>
```
hasilnya
![image](https://github.com/user-attachments/assets/3a5670f7-95af-4eae-9f22-18ad31e9c75d)

# Kondisi Switch
```
<?php 
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
?>
```
hasilnya
![image](https://github.com/user-attachments/assets/cb4730a1-7347-46cb-9b19-9755c54ec836)

# Perulangan for
```
<?php 
echo "Perulangan 1 sampai 10 <br />"; 
for ($i = 1; $i <= 10; $i++) { 
    echo "Perulangan ke: " . $i . '<br />'; 
} 
 
echo "Perulangan Menurun dari 10 ke 1 <br />"; 
for ($i = 10; $i >= 1; $i--) { 
    echo "Perulangan ke: " . $i . '<br />'; 
} 
?>
```
hasilnya
![image](https://github.com/user-attachments/assets/f518a5e3-3343-41ab-a5dd-2da69136197b)

# Perulangan while
```
<?php 
echo "Perulangan 1 sampai 10 <br />"; 
$i = 1; 
while ($i <= 10) { 
    echo "Perulangan ke: " . $i . '<br />'; 
    $i++; 
} 
?>
```
hasilnya
![image](https://github.com/user-attachments/assets/c4129792-a2fc-4289-bf34-eee1c2e0864c)

# Perulangan do-while
```
<?php 
echo "Perulangan 1 sampai 10 <br />"; 
$i = 1; 
do { 
    echo "Perulangan ke: " . $i . '<br />'; 
    $i++; 
} while ($i <= 10); 
?>
```
hasilnya
![image](https://github.com/user-attachments/assets/5e667145-3224-4264-83b2-6db14a0c552b)

# TERIMAKASIH
